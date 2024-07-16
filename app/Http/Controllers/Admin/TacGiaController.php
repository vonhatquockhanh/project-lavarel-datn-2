<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TacGia;
use App\Models\Sach;
use App\Http\Requests\TacGiaRequest;
use App\Http\Controllers\Controller;

class TacGiaController extends Controller
{
    public function danhSach()
    {
        $DStacGia = TacGia::with('sach')->paginate(10); // Số lượng item trên mỗi trang, ví dụ 10 item
        return view('admin.tac-gia.danh-sach', compact('DStacGia'));
    }

    public function themMoi()
    {
        $list_of_books = Sach::all(); // Lấy danh sách tất cả các sách từ database

        return view('admin.tac-gia.them-moi', compact('list_of_books'));
    }

    public function xuLyThemMoi(TacGiaRequest $request)
    {
        try {
            $tacgia = TacGia::find($request->id);
            if ($tacgia) {
                return back()->withInput()->with(['thong_bao' => "ID {$request->id} đã tồn tại! Vui lòng chọn ID khác."]);
            }
        $tacgia = new TacGia();
        $tacgia->id = $request->id; 
        // $tacgia->sach_id = $request->sach_id;
        $tacgia->ten_tac_gia = $request->ten_tac_gia;
        $tacgia->ngay_sinh = $request->ngay_sinh;
        $tacgia->quoc_tich = $request->quoc_tich;
        $tacgia->dia_chi = $request->dia_chi;
        $tacgia->save();

        return redirect()->route('admin.tac-gia.danh-sach')->with(['thong_bao' => "Thêm tác giả {$tacgia->ten_tac_gia} thành công!"]);
        }catch (Exception $e) {
            return back()->withInput()->with(['thong_bao' => "Lỗi thêm tác giả: " . $e->getMessage()]);
        }
    }

    public function capNhat($id)
    {
        $tacgia = TacGia::find($id);
        if (!$tacgia) {
            return redirect()->route('admin.tac-gia.danh-sach')->with('thong_bao', 'Tác giả không tồn tại!');
        }
        return view('admin.tac-gia.cap-nhat', compact('tacgia'));
    }

    public function xuLyCapNhat(TacGiaRequest $request, $id)
    {
        $tacgia = TacGia::find($id);
        if (!$tacgia) {
            return redirect()->route('admin.tac-gia.danh-sach')->with('thong_bao', 'Tác giả không tồn tại!');
        }
        // $tacgia->sach_id = $request->sach_id;
        $tacgia->ten_tac_gia = $request->ten_tac_gia;
        $tacgia->ngay_sinh = $request->ngay_sinh;
        $tacgia->quoc_tich = $request->quoc_tich;
        $tacgia->dia_chi = $request->dia_chi;
        $tacgia->save();

        return redirect()->route('admin.tac-gia.danh-sach')->with('thong_bao', 'Cập nhật tác giả thành công!');
    }

    public function xoa($id)
    {
        $tacgia = TacGia::findOrFail($id);
        $tacgia->delete();

        return redirect()->route('admin.tac-gia.danh-sach')->with('success', 'Đã xóa tác giả thành công');
    }
    public function timKiem(Request $request)
    {
        $searchTerm = $request->input('search_name');
        $DStacGia = TacGia::where('ten_tac_gia', 'like', '%' . $searchTerm . '%')
            ->orWhere('sach_id', 'like', '%' . $searchTerm . '%')
            ->paginate(10);

        if ($DStacGia->isEmpty()) {
            $errorMessage = "Không tìm thấy kết quả phù hợp với từ khóa tìm kiếm: '$searchTerm'";
            return view('admin.tac-gia.danh-sach', compact('DStacGia', 'searchTerm', 'errorMessage'));
        }

        return view('admin.tac-gia.danh-sach', compact('DStacGia', 'searchTerm'));
    }
}
