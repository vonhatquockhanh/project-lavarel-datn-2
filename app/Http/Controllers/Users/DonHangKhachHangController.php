<?php

namespace App\Http\Controllers\Users;

use App\Models\DonHang;
use App\Models\CTDonHang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DonHangKhachHangController extends UsersBaseController
{
    public function donHangCuaToi()
    {
        $userId = Auth::user()->id;
        $donHangCuaToi = DonHang::where('user_id', $userId)->orderBy('created_at', 'desc')->get();

        return view('public.users.don-hang', compact('donHangCuaToi'));
    }
    public function chiTietDonHang($id)
    {
        $donHang = DonHang::findOrFail($id);
        $chiTietDonHang = CTDonHang::where('don_hang_id', $id)->get();

        return view('public.users.chi-tiet-don-hang', compact('chiTietDonHang', 'donHang'));
    }

    public function daNhanHang($id)
    {
        // Tìm đơn hàng dựa trên id
        $order = DonHang::findOrFail($id);

        // Cập nhật trạng thái của đơn hàng
        $order->update([
            'trang_thai_thanh_toan' => 1,
            'trang_thai' => 3,
        ]);

        // Điều hướng trở lại trang trước đó
        return redirect()->back();
    }
}
