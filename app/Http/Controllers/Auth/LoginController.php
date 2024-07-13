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
