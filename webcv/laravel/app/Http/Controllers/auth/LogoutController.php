<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LogoutController extends Controller
{
    //
    
    public function logout(){
        Auth::logout();
       
        return Redirect('trangchu');
        // return view('loginbh');
    }
    public function getDangxuat(){
        Auth::logout();
        Cart::destroy();
        return Redirect()->back();
    }
}
