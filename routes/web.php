<?php

use App\Models\Vendors;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardVendorController;
use App\Http\Controllers\MenuController;

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
    return view('welcome', [
        "title" => "Home"
    ]);
});

Route::get('/order',function(){
    return view('order',[
        "title" => "Order"
    ]);
});

Route::get('/rest',function(){
    return view('rest',[
        "title" => "rest"
    ]);
});

Route::get('/pokokmari',function(){
    return view('detailmenu',[
        "title" => "detail"
    ]);
});

Route::get('/menu',[VendorController::class,'index']);


//Halaman single vendor
Route::get('menu/{vendor:slug}',[VendorController::class,'show']);
Route::get('menu/{vendor:slug}/{menu:id}',[MenuController::class,'showmenu']);
Route::post('/menu/{vendor:slug}/{menu:id}/add',[MenuController::class,'transaksiAdd'])->middleware('vendor');


Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('user');

Route::resource('/dashboard/menu',DashboardMenuController::class)->middleware('user');
Route::resource('/dashboard/vendors',DashboardVendorController::class)->middleware('user');
Route::get('dashboard/vendors/checkSlug',[DashboardVendorController::class,'checkSlug'])->middleware('user');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);



Route::get('/registercust',[RegisterController::class,'regiscust'])->middleware('guest');
Route::get('/registervend',[RegisterController::class,'regisvendor'])->middleware('guest');
Route::post('/registercust',[RegisterController::class,'storecust']);
Route::post('/registervend',[RegisterController::class,'storevend']);


Route::resource('/transaksi',TransaksiController::class);

