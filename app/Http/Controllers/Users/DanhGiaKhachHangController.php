<?php

namespace App\Http\Controllers\Users;

use App\Models\DanhGiaSach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DanhGiaKhachHangController extends UsersBaseController
{
    public function danhGiaCuaToi()
    {
        $userId = Auth::user()->id;
        $danhGiaCuaToi = DanhGiaSach::with('sach')->where('user_id', $userId)->latest()->paginate(10);

        return view('public.users.danh-gia', compact('danhGiaCuaToi'));
    }

    public function xoaDanhGia($id)
    {
        $review = DanhGiaSach::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('alert_message', 'Đánh giá của bạn đã bị xóa');
    }
}
