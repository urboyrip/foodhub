<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendors;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function regiscust(){
        return view('register.regiscust',[
            'title' => 'register'
        ]);
    }

    public function regisvendor(){
        return view('register.regisvendor',[
            'title' => 'register'
        ]);
    }

    public function storecust(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:2555',
            'email' => 'required|unique:users',
            'password' => 'required',
            're-password' => 'required|required_with:password|same:password'
        ]);
        
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // return $request->all();

        return redirect('/login')->with('success','Registration Successfull!');
    }

    public function storevend(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:2555',
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            're-password' => 'required|required_with:password|same:password',
            'founder'=>'required'
        ]);
        
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        Vendors::create($validatedData);

        // return $request->all();

        return redirect('/login')->with('success','Registration Successfull!');
    }
}
