<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function getdangki(){
        return view('dangki');
    }
    public function postdangki(Request $request){
        // $request->input();   
        $validator= Validator::make($request->all(),[
                'ten'=>'required|alpha|min:6|max:16',
                'pass'=>'required',
                'sdt'=>'required'
        ]);
        
        if($validator->fails()){
            // dd($validator);
            return redirect()->back()
            ->withErrors($validator);
        }
       
        // dd($request);
         $user = new User();
         $user->name = $request->ten;
         $user->password =Hash::make($request->pass) ;
         $user->phone = $request->sdt;
         $user ->save();
        //  dd($user);
        
         $request>session()->flash('success','đăng kí thành công, đăng nhập ngay');
            // return redirect()->view('dangnhap');
            return redirect('dangnhap');
    }
}
