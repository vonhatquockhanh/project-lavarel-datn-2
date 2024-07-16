<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; // Sử dụng đúng lớp Request
use App\Http\Controllers\GioHangController;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
         // Kiểm tra trạng thái locked của tài khoản
         if ($user->locked) {
            Auth::logout(); // Đăng xuất người dùng nếu tài khoản bị khóa
            return redirect()->back()->with('error_message', 'Tài khoản của bạn đã bị khóa.');
        }
        // Di chuyển giỏ hàng từ session vào cơ sở dữ liệu sau khi người dùng đăng nhập
        $gioHangController = new GioHangController();
        $gioHangController->saveGioHangVaoDatabase();

        // Kiểm tra vai trò và chuyển hướng
        if ($user->role->id == 1) {
            return redirect('/admin-home');
        } elseif ($user->role->id == 3) {
            return redirect('/user-trang-chu');
        } else {
            return redirect('/');
        }
    }

    public function redirectTo()
    {
        $role_id = Auth::user()->role->id;

        switch ($role_id)
        {
            case '1':
                return '/admin-home';
                break;
            case '2':
                return '';
                break;
            case '3':
                return '/user-trang-chu';
                break;
            default:
                return '/login';
                break;
        }
    }
    // private function layThongTinNguoiDung()
    // {
    //     $user = null;
    //     $role = session('user_role');
    //     if ($role === 'admin') {
    //         $user = Auth::guard('admin')->user();
    //     }

    //     if (!$user) {
    //         return redirect()->route('login')->with('thong_bao', 'Vui lòng đăng nhập để tiếp tục.');
    //     }

    //     return compact('user', 'role');
    
//     public function TaiKhoan()
// {
//     $data = $this->layThongTinNguoiDung();

//     if ($data['user']) {
//         // Lấy thông tin admin
//         $admin = Auth::user();

//         // Hợp nhất mảng $data với mảng chứa biến $admin
//         $data = array_merge($data, compact('admin'));

//         // Trả về view với mảng hợp nhất
//         return view('admin.admin.taikhoan', $data);
//     } else {
//         return redirect()->route('dangnhap')->with('thong_bao', 'Vui lòng đăng nhập để xem thông tin tài khoản.');
//     }
// }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/admin-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}