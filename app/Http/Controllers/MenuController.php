<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Vendors;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function showmenu($vendor, $menus){
        return view('detailmenu',[
            "title" => "detail",
            "menus" => Menu::find($menus),
            "vendor" => Vendors::find(1)
        ]);
    }


}
