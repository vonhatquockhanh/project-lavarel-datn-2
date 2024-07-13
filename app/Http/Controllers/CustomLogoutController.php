<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CustomLogoutController extends Controller
{
    public function logout () {
        //logout user
        auth()->logout();

        // Clear all items in the cart
        Cart::destroy();

        // redirect to homepage 
        return redirect('/')->with('logout_message', "You logged out successfully.");
    }
}
