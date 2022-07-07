<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Vendors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.menu.index',[
            'menus'=> Menu::all(),
            'vendors' => Vendors::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu.create',[
            'vendors' => Vendors::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'picture'=> 'image|file',
            'description' => 'required',
            'vendors_id' => 'required'
        ]);
            
        if($request->file('picture')){
            $validatedData['picture'] = $request->file('picture')->store('menu');
        }

        // $validatedData['id'] = auth()->user()->id;
        
        $validateData['description'] = strip_tags($request->description);
        
        Menu::create($validatedData);

        return redirect('/dashboard/menu')->with('success','Menu has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('dashboard.menu.show',[
            "menu" => $menu,
            "vendor" => Vendors::find($menu->vendors_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('dashboard.menu.edit',[
            "vendors" => Vendors::all(),
            "menu" => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'picture'=> 'image|file',
            'description' => 'required',
            'vendors_id' => 'required'];

        $validatedData = $request->validate($rules);

        if($request->file('picture')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['picture']=$request->file('picture')->store('menu');
        }

        Menu::where('id',$menu->id)
                ->update($validatedData);

        return redirect('dashboard/menu')->with('success','Vendor has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if($menu->image){
            Storage::delete($menu->image);
        }
        Menu::destroy($menu->id);

        return redirect('/dashboard/menu')->with('success','Vendor has been deleted');
    }
}
