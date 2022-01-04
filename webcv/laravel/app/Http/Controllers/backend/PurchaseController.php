<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PurchaseController extends Controller
{
    //
    public function getPurchase(){
        Auth::check();
        $supplier = supplier::all();
        
        return view('admin.purchase.purchase')->with([
            'supplier'=> $supplier
        ]);
    }

    public function getidPurchase($id){
        $id_product= DB::table('product_suppliers')->where('id_supplier',$id)->get();
        $arrayID = [];

        foreach($id_product as $idProduct) {
            $arrayID[] = $idProduct->id;
        }

        echo json_encode(DB::table('Products')->whereIn('id',$arrayID)->get());
    }
}
