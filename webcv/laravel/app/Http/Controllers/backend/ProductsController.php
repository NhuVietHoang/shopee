<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;

class ProductsController extends Controller
{
    public function getdashboard(){
        return view('admin.dashboard');
    }
    public function getcreateproduct(){
        return view('admin.createproduct');
    }

    public function getproduct()
    {   
        $id_user=Auth::user()->id;
        $data = DB::table('products')->where('id_user',$id_user)->get();
        return view('admin.product',compact('data'));
    }
    public function deletead($id){
   
        Products::find($id)->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $id_user=Auth::user()->id;
        $data= Products::where('id_user',$id_user)->where('name','like','%'.$request->key.'%')->get();
        return view('admin.product',compact('data'));
        
    }

    public function createproduct(Request $request){
        $id_user= Auth::user()->id;
        // $product = $id_user;
       $product =$request->all();
       $product = new Products();
        $product->id_user= $id_user;
        $product->name= $request->name;
       $product->unit_price= $request->unit_price;
       $product->promotion_price= $request->promotion_price;
       $product->image = $request->image;
       $product->save();
       return redirect()->back()->with('success','tạo sản phẩm thành công');
       

    }

    // public function addCart($id){
        
    //     $products = DB::table('products')->where('id',$id)->first();
       
    //     $oldcart = Session('cart') ? Session('cart') :null;
      
    // }
}
