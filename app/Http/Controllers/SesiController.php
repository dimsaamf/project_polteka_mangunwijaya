<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/manajemenusersuperadmin');
        }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }
}
