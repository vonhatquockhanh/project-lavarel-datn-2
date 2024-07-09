<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use Cart;
use Illuminate\Http\Request;
class GioHangController extends Controller
{
    public function them(Request $request)
    {
        $sach = Sach::findOrFail($request->sach_id);

        if ($sach->so_luong >= $request->so_luong){

            if ($request->so_luong >= 1)
            {
                $weight = !empty($weight) ? floatval($weight) : 0;

                $cartItem = Cart::add([
                    'id' => $sach->id,
                    'name' => $sach->ten_sach,
                    'price' => $sach->gia,
                    'qty' => $request->so_luong,
                    'weight' => $sach->can_nang,
                    'options' => [
                        'image' => $sach->hinhAnh->url
                    ]
                ]);

                return redirect()->back();
            }
            else
                {
                return redirect()->back()
                    ->with('giohang_alert', "Số lượng phải lớn hơn 0");
                }

        }
        else {
            return redirect()->back()
                ->with('giohang_alert', "Chúng tôi không có số lượng nhiều như vậy..");
        }

    }

    public function gioHang()
    {
        return view('public.gio-hang');
    }

    public function xoa($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
    public function tangDan($id, $qty, $sach_id)
    {
        $sach = Sach::findOrFail($sach_id);

        if($sach->so_luong > $qty)
        {
            Cart::update($id, $qty+1);
            return redirect()->back();
        }
        else
        {
            return redirect()->back()
                ->with('cart_alert', "Không còn số lượng còn lại trong kho cho cuốn sách này");
        }
    }

    public function giamDan($id, $so_luong)
    {
        Cart::update($id, $so_luong-1);
        return redirect()->back();
    }
}
