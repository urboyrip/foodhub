<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\Transaksi;
use App\Models\Vendors;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function showmenu($vendor, $menus){
        return view('detailmenu',[
            "title" => "detail",
            "menus" => Menu::find($menus),
            "vendor" => Vendors::find(1)
        ]);
    }
    public function order(Request $request){
        Pesanan::create([
            'id_customer' => Auth::guard('user')->user()->id,
            'no_meja' => $request->no_meja,
            'total' => 0,
            'status' => '0'
        ]);
    }
    public function transaksiAdd(Request $request, $vendor,$menus){
        $pesanan = Pesanan::where('id_customer',Auth::guard('user')->user()->id)->where('status',0)->first()->id;
        if ($pesanan == null) {
            Pesanan::create([
                'id_customer' => Auth::guard('user')->user()->id,
                'no_meja' => Meja::where('status',0)->first()->id,
                'total' => 0,
                'status' => '0'
            ]);
            $pesanan=Pesanan::where('id_customer',Auth::guard('user')->user()->id)->where('status',0)->first()->id;
        }
        Transaksi::create([
            'menu' =>intval($menus),
            'pesanan'=>$pesanan,
            'jumlah' => $request->jumlah,
            'subtotal' => Menu::find($menus)->price * $request->jumlah,
        ]);
        return redirect('/transaksi');
    }


}
