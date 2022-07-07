<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\Vendors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::where('id_customer',Auth::guard('user')->user()->id)->where('status',0)->first();
        if ($pesanan == null) {
            return redirect('/order');
        }
        return view('transaksi',[
            'title' => 'transaksi',
            'transaksi' => transaksi::where('pesanan',$pesanan->id)->get(),
            'pesanan'=>$pesanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        return view('detailmenu',[
            "title" => "detail",
            "menus" => Menu::find($transaksi->menu),
            "vendor" => Vendors::find($transaksi->menus->vendor->id),
            "transaksi"=>$transaksi,
            "status"=>'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransaksiRequest  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        transaksi::where('id',$transaksi->id)->update([
            'jumlah' => $request->jumlah,
            'subtotal' => $request->jumlah * $transaksi->menus->price,
        ]);
        return redirect('/transaksi')->with('success','transaksi terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        transaksi::destroy($transaksi->id);
        
        return redirect('/transaksi')->with('success','transaksi terhapus');
    }
    public function checkout(Request $request,$id)
    {
        Pesanan::where('id',$id)->update([
            'status' => 1,
            'total'=>$request->total
        ]);
        Meja::where('id',$request->no_meja)->update([
            'status' => '0'
        ]);
        
        return redirect('/order')->with('success','transaksi terhapus');
    }
    
}
