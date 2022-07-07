<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use App\Models\Menu;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.vendor.index',[
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
        return view('dashboard.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('flyer');
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:vendors',
            'founder' => 'required',
            'star' => 'required',
            'image'=> 'image|file',
            'description' => 'required']);
            
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('flyer');
        }

        $validatedData['id'] = auth()->user()->id;
        $validateData['description'] = strip_tags($request->description);
        
        Vendors::create($validatedData);

        return redirect('/dashboard/vendors')->with('success','Vendor has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendors
     * @return \Illuminate\Http\Response
     */
    public function show(Vendors $vendor)
    {
        return view('dashboard.vendor.show',[
            'vendor' => $vendor,
            'menu'=> Menu::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendors $vendor)
    {
        return view('dashboard.vendor.edit',[
            'vendor' => $vendor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendors $vendor)
    {
        $rules = [
            'name' => 'required',
            'founder' => 'required',
            'star' => 'required',
            'image'=> 'image|file',
            'description' => 'required'];


            
        if($request->slug != $vendor->slug){
            $rules['slug'] = 'required|unique:vendors';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']=$request->file('image')->store('flyer');
        }

        Vendors::where('id',$vendor->id)
                ->update($validatedData);

        return redirect('dashboard/vendors')->with('success','Vendor has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendors  $vendors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendors $vendor)
    {
        if($vendor->image){
            Storage::delete($vendor->image);
        }
        Vendors::destroy($vendor->id);

        return redirect('/dashboard/vendors')->with('success','Vendor has been deleted');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class,'slug',$request->name);
        return response()->json(['slug' => $slug]);
    }
}
