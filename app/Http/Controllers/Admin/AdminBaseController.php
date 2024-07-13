<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Order;
use App\User;
use App\Models\Sach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::all();
        $sachs = Sach::with('hinhAnh')->paginate(10);
        return view('admin.sach.danh-sach', compact('sachs'));
    }

}
