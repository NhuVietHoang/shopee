<?php

namespace App\Http\Controllers\backend;
// namespace vendor\bumbummen99;

use App\Http\Controllers\Controller;
use App\Models\cart as ModelsCart;
use App\Models\order;
use App\Models\billdetail;
use App\Models\shopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{
   
    public function saveProduct(Request $request){
        
        if(isset($_POST['no-accout'])){
            return Redirect('dangnhap');
        }else if(isset($_POST['have-accout'])){
            
        $quanty= $request->quanty;
        $price= $request->price;
        $id_product= $request->id_product;
        $product_info= DB::table('products')->where('id',$id_product)->first();
       
        $data['id']=$product_info->id;
        $data['qty']=$quanty;
        $data['name']=$product_info->name;
        $data['price']=$product_info->promotion_price;
        $data['weight']=$product_info->id_user;
        $data['options']['image']=$product_info->image;
        Cart::add($data);

        $totalprice= $quanty * $price;
        $c_cart= new shopping();
        $c_cart->cart_name = Auth::user()->name;
        // $c_cart->cart_product= $product_info->name;
        $c_cart->cart_id= $id_product; 
        $c_cart->cart_qty= $quanty;
        $c_cart->cart_subtotal= $totalprice;
        $c_cart->save();
        // dd($c_cart);

        return Redirect::to('cart');
        }
        
    //    return Redirect::to('cart');
        // return view('cart',compact('quanty','price'));
    }

    public function getCart(){
        return view('cart');
    }

    public function getDelete($rowId){
            cart::update($rowId,0);
            
        return Redirect('cart');

    }

    public function postCart(Request $request){
            $content= Cart::content();
            // dd($content);
            foreach( $content as $v_content){
                $datab= new billdetail();
                $datab->name= $request->name;
                $datab->name_prd=$v_content->name;
                $datab->qty= $v_content->qty;
                $datab->total_price= $v_content->price * $v_content->qty;
                $datab->id_user= $v_content->weight;
                // dd($datab);
                $datab->save();
                // Cart::destroy();
            }

            
            $data= new order;
            $data->name_order= $request->name;

            $data->address_oder=$request->address;
            $data->phone_order= $request->phone;
            $data->total_order= $request->total;
            $data->save();
            Cart::destroy();
            return Redirect()->back();
    }
}
