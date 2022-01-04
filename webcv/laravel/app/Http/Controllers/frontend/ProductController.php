<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //
    public function getsanpham($id){
        $data= Products::where('id',$id)->get();
        // dd($data);
        
        
        return view('sanpham',compact('data'));
    }
    
}
