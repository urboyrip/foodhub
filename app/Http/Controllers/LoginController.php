<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        // dd($request->role);
        if($request->role == "admin" || $request->role == "user"){
            if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $request->session()->regenerate();
                if(Auth::guard('user')->user()->admin == true){
                    return redirect('/dashboard');
                }
                return redirect('/');
            } else {
                return redirect()->back()->with('error','Login Gagal');
            }
        }


        if($request->role == "vendor"){
            if (Auth::guard('vendors')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect('/dashboard');
            } else {
                return redirect()->back();
            }
        }
        // if($request->role == "user"){
        //     if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //         $request->session()->regenerate();
        //         return redirect('/menu');
        //     } else {
        //         return redirect()->back();
        //     }
        // }


        return back()->with('error','Login Failed');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
