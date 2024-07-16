<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\LoaiSach;
use App\Http\Requests\LoaiSachRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoaiSachController extends Controller
{
    public function themMoi()
    {
        return view('admin.loai-sach.them-moi');
    }

    public function xuLyThemMoi(LoaiSachRequest $request)
    {
        try {
            $loaiSach = LoaiSach::find($request->id);
            if ($loaiSach) {
                return back()->with(['thong_bao' => "ID {$request->id} đã tồn tại! Vui lòng chọn ID khác."]);
            }
            
            $loaiSach = new LoaiSach();
            $loaiSach->id = $request->id;
            $loaiSach->ten_loai_sach = $request->ten_loai_sach;
            $loaiSach->slug = $request->slug;
            $loaiSach->save();
        
            return redirect()->route('admin.loai-sach.danh-sach')->with(['thong_bao' => "Thêm loại sách {$loaiSach->ten_loai_sach} thành công!"]);
        } catch (Exception $e) {
            return back()->with(['thong_bao' => "Lỗi thêm loại sách: " . $e->getMessage()]);
        }
      

    }

    public function danhSach()
    {
        $dsLoaiSach = LoaiSach::paginate(10);
        return view('admin.loai-sach.danh-sach', compact('dsLoaiSach'));
    }

    public function capNhat($id)
    {
        $loaiSach = LoaiSach::find($id);
        if (empty($loaiSach)) {
            return redirect()->route('admin.loai-sach.danh-sach')->with(['thong_bao' => "Loại sách không tồn tại!"]);
        }

        return view('admin.loai-sach.cap-nhat', compact('loaiSach'));
    }

    public function xuLyCapNhat(LoaiSachRequest $request, $id)
    {
        $loaiSach = LoaiSach::find($id);
        if (empty($loaiSach)) {
            return redirect()->route('admin.loai-sach.danh-sach')->with(['thong_bao' => "Loại sách không tồn tại!"]);
        }

        $loaiSach->ten_loai_sach = $request->ten_loai_sach;
        $loaiSach->slug = $request->slug;
        $loaiSach->save();

        return redirect()->route('admin.loai-sach.danh-sach')->with(['thong_bao' => "Cập nhật loại sách {$loaiSach->ten_loai_sach} thành công!"]);
    }

    public function xoa($id)
    {
        $loaiSach = LoaiSach::find($id);
        if (empty($loaiSach)) {
            return redirect()->route('admin.loai-sach.danh-sach')->with(['thong_bao' => "Loại sách không tồn tại!"]);
        }

        $loaiSach->delete();

        return redirect()->route('admin.loai-sach.danh-sach')->with(['thong_bao' => "Xóa loại sách {$loaiSach->ten_loai_sach} thành công!"]);
    }

    public function timKiem(Request $request)
    {
        $search = $request->get('search');
        $dsLoaiSach = LoaiSach::where('ten_loai_sach', 'like', '%' . $search . '%')
                              ->orWhere('slug', 'like', '%' . $search . '%')
                              ->paginate(10);
    
        if ($dsLoaiSach->isEmpty()) {
            $errorMessage = "Không tìm thấy loại sách với từ khóa: '$search'";
            return view('admin.loai-sach.danh-sach', compact('dsLoaiSach', 'search', 'errorMessage'));
        }
    
        return view('admin.loai-sach.danh-sach', compact('dsLoaiSach', 'search'));
    }
}
