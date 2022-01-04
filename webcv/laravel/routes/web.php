<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\backend\CartController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductsController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\backend\SupplierController;
use App\Http\Controllers\fronend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('trangchu',[HomeController::class,'getHome']);
Route::get('sanpham/{id}',[ProductController::class,'getsanpham']);

Route::get('dangki',[RegisterController::class,'getdangki']);
Route::post('dangki',[RegisterController::class,'postdangki']);

Route::get('dangnhap',[LoginController::class,'getdangnhap']);
Route::post('dangnhap',[LoginController::class,'postDangnhap']);
Route::get('dangxuat',[LogoutController::class,'getDangxuat']);

Route::get('loginbh',[LoginController::class,'getloginbh']);
Route::post('loginbh',[LoginController::class,'postloginbh']);
Route::get('logout',[LogoutController::class,'logout']);

Route::get('trangchu/search',[HomeController::class,'getsearch']);
Route::post('trangchu/search',[HomeController::class,'search']);



// backend

Route::get('admin',[ProductsController::class,'getdashboard'])->middleware('CheckAdmin');
Route::get('admin/product',[ProductsController::class,'getproduct']);
Route::get('admin/delete/{id}',[ProductsController::class,'deletead']);
Route::post('admin/searchprd',[ProductsController::class,'search']);
Route::get('admin/createproduct',[ProductsController::class,'getcreateproduct']);
Route::post('admin/createproduct',[ProductsController::class,'createproduct']);
Route::get('admin/order',[OrderController::class,'getOrder']);

Route::get('admin/supplier',[SupplierController::class,'getSupplier']);
Route::get('admin/createsupplier',[SupplierController::class,'createSupplier']);
Route::post('admin/createsupplier',[SupplierController::class,'postSupplier']);
Route::get('admin/supplier/delete/{id}',[SupplierController::class,'deleteSupplier']);
Route::get('admin/supplier/detail/{id}',[SupplierController::class,'detailSupplier']);
Route::get('admin/supplier/edit/{id}',[SupplierController::class,'editSupplier']);
Route::post('admin/supplier/edit/{id}',[SupplierController::class,'posteditSupplier']);

Route::get('admin/purchase',[PurchaseController::class,'getPurchase'])->name('admin.purchase.purchase');
Route::get('admin/purchase/{id}',[PurchaseController::class,'getidPurchase']);

Route::get('addCart/{id}',[CartController::class,'addCart']);
Route::get('addCart/{id}',[CartController::class,'addCart']);
Route::post('/save-cart',[CartController::class,'saveProduct']);
Route::get('cart',[CartController::class,'getCart']);
Route::get('delete-cart/{rowId}',[CartController::class,'getDelete']);
Route::post('cart',[CartController::class,'postCart']);