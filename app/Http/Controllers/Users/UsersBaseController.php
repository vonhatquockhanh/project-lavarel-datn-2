<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GioHangController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\HinhAnh;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UsersBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user');
    }

    public function index()
    {
        $gioHangController = new GioHangController();
        $gioHangController->capNhatGioHangVaoDatabase();
        return view('public.users.profile');
    }

    public function thongTinCaNhan()
    {
        $user = Auth::user();

        return view('public.users.thong-tin-ca-nhan', compact('user'));
    }

    public function caiDatTaiKhoan(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Kiểm tra mật khẩu cũ
        if ($request->filled('current_password') && !Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Mật khẩu cũ không đúng']);
        }

        // Kiểm tra mật khẩu mới và xác nhận mật khẩu mới có khớp nhau hay không
        if ($request->filled('password') && $request->password !== $request->password_confirmation) {
            return redirect()->back()->withErrors(['password_confirmation' => 'Mật khẩu mới và xác nhận mật khẩu mới không khớp nhau']);
        }

        $user->name = $request->input('name', $user->name);
        $user->email = $request->input('email', $user->email);
        $user->address = $request->input('address', $user->address);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image_id')) {
            $file = $request->file('image_id');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/assets/img', $filename);

            // Kiểm tra và xoá hình ảnh cũ nếu tồn tại
            if ($user->image_id) {
                $oldImage = HinhAnh::find($user->image_id);
                if ($oldImage) {
                    Storage::delete($oldImage->url);
                    $oldImage->delete();
                }
            }

            $image = new HinhAnh;
            $image->url = $filename; // Lưu đường dẫn đầy đủ
            $image->save();

            $user->image_id = $image->id;
        }

        $user->save();

        return redirect()->back()->with('success', 'Hồ sơ đã được cập nhật thành công');
    }

}
