<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function getOrder(){
        Auth::check();
        $data=DB::table('bill_detail')->where('id_user',Auth::user()->id)->get();
        // dd($data);
        return view('admin.order', compact('data'));
    }
}
