<?php

namespace App\Http\Controllers\fronend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\Products;
use App\Models\cart;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        
        $product = Products::all();
        
        return view('trangchu',compact('product'));
      
    }
    public function getsearch(){
        return view('search');
    }
    public function search(Request $request){
        $keyWord = $request->get('key');
        $data = Products::where('name','like','%'.$keyWord.'%')->get();
      
        return view('search')->with([
            'data'=>$data
        ]);
    }
}
