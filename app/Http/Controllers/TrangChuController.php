<?php

namespace App\Http\Controllers;
use App\Models\TacGia;
use GrahamCampbell\Markdown\Facades\Markdown;
use App\Models\Sach;
use App\Models\LoaiSach;
use App\Models\DanhGiaSach;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $loai_sach = LoaiSach::orderBy('created_at', 'DESC')->take(5)->get();
        
        $sach_theo_loai = [];
        foreach ($loai_sach as $loai) {
            $sach_theo_loai[$loai->slug] = Sach::with('loaiSach', 'tacGia', 'hinhAnh')
                ->whereHas('loaiSach', function($query) use ($loai) {
                    $query->where('slug', $loai->slug);
                })
                ->take(4)
                ->latestFirst()
                ->get();
        }

        return view('public.trang-chu-sach', compact('loai_sach', 'sach_theo_loai'));
    }

    public function tatCaSach()
    {
        # ComposerServiceProvider load here
        $sachs = Sach::with('tacGia', 'hinhAnh', 'loaiSach', 'nhaXuatBan')
                    ->orderBy('id', 'DESC')
                    ->search(request('term')) #...Search Query
                    ->paginate(16);
        return view('public.tat-ca-sach', compact('sachs'));
    }
    public function sachGiamGia()
    {
        # ComposerServiceProvider load here
        $discountTitle = "All discount books";
        $books = Sach::with('author', 'image', 'category')
            ->orderBy('discount_rate', 'DESC')
            ->where('discount_rate', '>', 0)
            ->paginate(16);
        return view('public.tat-ca-sach', compact('books', 'discountTitle'));
    }
    /*
     * Books filter by category
     */
    public function loaiSach(LoaiSach $loaiSach)
    {
        $tenLoaiSach = $loaiSach->ten_loai_sach;
        $sachs = $loaiSach->sachs()
            ->with('loaiSach', 'tacGia', 'hinhAnh')
            ->orderBy('id','DESC')
            ->paginate(16);
        return view('public.tat-ca-sach', compact('sachs', 'tenLoaiSach'));
    }
    /*
     * Books filter by author
     */
    public function tacGia(TacGia $tacGia)
    {
        $tenTacGia = $tacGia->ten_tac_gia;
 
        $sachs = $tacGia->sachs()
            ->with('loaiSach', 'tacGia', 'hinhAnh')
            ->orderBy('id', 'DESC')
            ->paginate(12);

        return view('public.tat-ca-sach', compact('sachs', 'tenTacGia'));
    }

    public function chiTietSach($id)
    {
        $sach = Sach::findOrFail($id);
        $danhGiaSach = $sach->danhGia()->with('user')->latest()->get();

        return view('public.chi-tiet-sach' , compact('sach', 'danhGiaSach'));
    }
}
