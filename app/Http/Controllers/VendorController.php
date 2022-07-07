<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function index(){
        if (Pesanan::where('id_customer',Auth::guard('user')->user()->id)->where('status',0)->first() == null) {
            return redirect('/order');
        }
        return view('menu',[
            "title" => "Menu",
            "vendors" => Vendors::all()
        ]);
    }

    public function show(Vendors $vendor){
        return view('vendor',[
            "title"=> "vendor",
            "vendor" => $vendor,
            "menu" => Menu::all()
        ]);
    }

    
}
