<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Models\DanhGiaSach;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

class DanhGiaSachController extends Controller
{
    public function store(Sach $sach , Request $request)
    {
        $rules = [
            'noi_dung'          => 'required'
        ];
        $message = [
            'noi_dung.required' => "Nội dung nhận xét không được để trống"
        ];
        $this->validate($request, $rules, $message);

        $input = $request->all();

        $input['id'] = (string) Str::uuid();
        $input['user_id'] = Auth::user()->id;
        $input['trang_thai'] = '0';

        $danhGiaSach = DanhGiaSach::create($input);

        return redirect()->back()->with('success_message', 'Đánh giá của bạn đã được thêm vào');
    }
}
