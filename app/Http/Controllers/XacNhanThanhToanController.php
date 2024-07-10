<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Http\Requests\ShippingAddressRequest;
use App\Models\DonHang;
use App\Models\CTDonHang;
use App\ShippingAddress;
use App\Models\KhuVucVanChuyen;
use App\Models\PhiVanChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Cart;

class XacNhanThanhToanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khuVucVanChuyensWithPhi = KhuVucVanChuyen::with('phiVanChuyen')->get();
        
        if (Cart::content()->count()){
            return view('public.kiem-tra-don-hang', compact('khuVucVanChuyensWithPhi'));
        }
        abort(403, 'Giỏ hàng trống! bạn không thể thanh toán');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        // Tạo mã tự động tăng cho DonHang
        $lastOrder = DonHang::orderBy('id', 'desc')->first();
        $newOrderId = 'DON_HANG_' . ($lastOrder ? ((int)str_replace('DON_HANG_', '', $lastOrder->id) + 1) : 1);

        // Tính tổng tiền đơn hàng và phí vận chuyển
        $cartTotal = Cart::total();
        $shippingFee = $request->khu_vuc_van_chuyen ? KhuVucVanChuyen::find($request->khu_vuc_van_chuyen)->phiVanChuyen->first()->phi_van_chuyen : 0;
        $totalPayment = $cartTotal + $shippingFee;

        // Tạo đơn hàng mới
        $order = new DonHang();
        $order->id = $newOrderId;
        $order->user_id = Auth::user()->id;
        $order->khach_hang_ten_dang_nhap = $input['khach_hang_ten_dang_nhap'];
        $order->admin_ten_dang_nhap = '';
        $order->ten_don_hang = '';
        $order->so_dien_thoai = $input['so_dien_thoai'];
        $order->dia_chi = $input['dia_chi'];
        $order->tong_tien = $cartTotal;
        $order->khu_vuc_giao_hang = $input['khu_vuc_van_chuyen'];
        $order->phi_van_chuyen = $shippingFee;
        $order->tong_tien_thanh_toan = $totalPayment;
        $order->ghi_chu = $input['ghi_chu'];
        $order->trang_thai = 1;
        $order->phuong_thuc_thanh_toan = $input['phuong_thuc_thanh_toan'] == 'Tiền mặt' ? 1 : 2; // 1: Tiền mặt, 2: Chuyển khoản
        $order->trang_thai_thanh_toan = 1;
        $order->save();

        // Tạo chi tiết đơn hàng cho mỗi sản phẩm trong giỏ hàng
        foreach (Cart::content() as $cartItem)
        {
            // Tạo mã tự động tăng cho CTDonHang
            $lastOrderDetail = CTDonHang::orderBy('id', 'desc')->first();
            $newOrderDetailId = 'CT_DON_HANG_' . ($lastOrderDetail ? ((int)str_replace('CT_DON_HANG_', '', $lastOrderDetail->id) + 1) : 1);

            $orderDetail = new CTDonHang();
            $orderDetail->id = $newOrderDetailId;
            $orderDetail->don_hang_id = $newOrderId;
            $orderDetail->sach_id = $cartItem->id;
            $orderDetail->combo_id = null;
            $orderDetail->gia = $cartItem->price;
            $orderDetail->so_luong = $cartItem->qty;
            $orderDetail->save();

            // Giảm số lượng sản phẩm trong kho
            $product = Sach::findOrFail($orderDetail->sach_id);
            $product->update([
                'so_luong' => $product->so_luong - $orderDetail->so_luong,
            ]);

            // Xóa sản phẩm khỏi giỏ hàng
            Cart::remove($cartItem->rowId);
        }

        return redirect()->route('user.don-hang')->with('success_message', 'Đơn hàng được đặt thành công. Vui chờ xác nhận và liên hệ.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
