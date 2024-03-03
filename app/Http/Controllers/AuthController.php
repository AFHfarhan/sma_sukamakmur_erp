<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request){

        $credentials = [
            'email' => $request->emailLogin,
            'password' => $request->passwordLogin,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with('success','Masuk Berhasil');
        }else{
            return back()->with('error','email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
