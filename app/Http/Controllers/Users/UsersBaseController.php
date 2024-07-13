<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GioHangController;

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

}
