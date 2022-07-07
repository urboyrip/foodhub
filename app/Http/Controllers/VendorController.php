<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function index(){
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
