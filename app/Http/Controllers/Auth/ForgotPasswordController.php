<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function forgotPassword(Request $request)
    {
       return view('auth.passwords.email');
    }

    public function sendPasswordEmail(Request $request)
    {
        $request->validate(['email' => 'required|email'], [
            'email.required' => 'Trường email là bắt buộc.',
            'email.email' => 'Địa chỉ email không hợp lệ.'
        ]);
        
       return view('auth.passwords.email');
    }

}
