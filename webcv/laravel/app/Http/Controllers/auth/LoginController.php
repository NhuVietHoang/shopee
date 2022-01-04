<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function getdangnhap(){
        return view('dangnhap');
    }
    public function getloginbh(){
        return view('loginbh');
    }
    public function postdangnhap(Request $request){
        $validator = Validator::make($request->all(),[
            'ten'=>'required|alpha|min:6|max:30',
             'pass'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator);
        }
        if(auth::attempt(['name'=>$request->ten,'password'=>$request->pass])){
            // dd(auth::check());
            // return view('trangchu');
             // session()->put('name',$request->ten);

            
            return redirect('trangchu');
        }else{
            return redirect()->back()
            ->withErrors('errors','tài khoản chưa đăng kí');
        }

    }
    public function postloginbh(Request $request){
        $man = $request->all();
        $dataman= User::all();
        // dd(Auth::attempt(['name' =>$request->name, 'password' => $request->password]));
        // dd(Auth::attempt(['name' =>$request->name, 'password' => $request->password]));
        if(Auth::attempt(['name' =>$request->name, 'password' => $request->password])){
            return redirect('admin');
        }else{
            return redirect()->back()->withErrors('errors','tai khoan chua dang ki');
        }
    }
    

}
