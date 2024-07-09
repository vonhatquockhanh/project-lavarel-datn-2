<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\KhachHang;
use App\Models\Sach;
use App\Models\Combo;
use App\Models\User;
use App\Models\DanhGiaSach;
use App\Models\DanhGiaCombo;
use App\Http\Requests\DanhGiaComboRequest;
use App\Http\Requests\DanhGiaSachRequest;
use App\Http\Controllers\Controller;

class DanhGiaController extends Controller
{
    public function danhSachDanhGiaCombo()
    {
        $danhGiaCombos = DanhGiaCombo::paginate(10);
        return view('admin.danh-gia-combo.danh-sach', compact('danhGiaCombos'));
    }

    public function danhSachDanhGiaSach()
    {
        $danhGiaSachs = DanhGiaSach::with(['user', 'sach'])->paginate(10);
        return view('admin.danh-gia-sach.danh-sach', compact('danhGiaSachs'));
    }
    public function xoaDanhGiaCombo($id)
    {
        $danhGiaCombo = DanhGiaCombo::findOrFail($id);
        $danhGiaCombo->delete();

        return redirect()->route('admin.danh-gia-combo.danh-sach')->with('success', 'Đã xóa đánh giá combo thành công');
    }

    public function xoaDanhGiaSach($id)
    {
        $danhGiaSach = DanhGiaSach::findOrFail($id);
        $danhGiaSach->delete();

        return redirect()->route('admin.danh-gia-sach.danh-sach')->with('success', 'Đã xóa đánh giá sách thành công');
    }
}
