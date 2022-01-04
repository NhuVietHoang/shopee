<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditRequest;
use App\Models\productsupplier;
use App\Models\supplier;
use Illuminate\Http\Request;
use App\Http\Requests\supplierRequest;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    //
    public function getSupplier(){
        $data= supplier::all();

        return view('admin.supplier',compact('data'));
    }

    public function createsupplier(){
        Auth::check();
        $data=DB::table('products')->where('id_user',Auth::user()->id)->get();
        
        return view('admin.createsupplier')->with([
            'data' => $data
        ]);
    }
    public function postSupplier(supplierRequest $request){
        $product_id= $request->product_id;
        // dd($product_id);
        $data = $request->except('_token');
        $data= new supplier;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->address= $request->address;
        $data->save();
        
        
        
        foreach($product_id as $idprd){
            $prd_supplier= new productsupplier;
            $prd_supplier->id_product= $idprd;
            $prd_supplier->id_supplier=$data->id;
            $prd_supplier->save();
        }


        if($data){
            return Redirect()->back()->with('success','Tạo mới thành cônng');
        }
            
    }
    public function deleteSupplier($id){
        supplier::find($id)->delete();
        return Redirect()->back();
    }
    public function detailSupplier($id){
        
        $info= DB::table('suppliers')->where('id', $id)->get();
        
        $product= DB::table('product_suppliers')->where('id_supplier',$id)->get();
        // dd($product);
       
        return view('admin.detailsupplier',compact('info','product'));
    }
    public function editSupplier($id){
        $supplier = DB::table('suppliers')->where('id',$id)->get();
        // dd($supplier);
        $products= DB::table('products')->where('id_user',Auth::user()->id)->get();
        // dd($products);
        return view('admin.editsupplier',compact('supplier'))->with([
            'products'=>$products
        ]);
    }
    public function posteditSupplier(EditRequest $request,$id){
            
            $supplier = supplier::find($id);
            $data = $request->except('_token');

            $supplier-> update($data);
            // if (!empty($data['product_id'])){
            //     $supplier->sync($data['product_id'], [
            //         'created_at' => Carbon::now(),
            //     ]);
            // }
            
    
            if ($supplier){
                return redirect('admin/supplier')->with("success",'Thay đổi thành công');
            }
            return redirect('admin/supplier')->with("error",'Thay đổi thất bại');
        }
    
}
