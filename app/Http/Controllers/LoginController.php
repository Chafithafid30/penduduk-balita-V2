<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Kodingan Login
    public function index(){
        return view('login');
    }

    // Kodingan Proses Login
    public function login_proses(Request $request){
        // dd($request->all()); -> Ini Vardump Untuk Uji Coba Login
        $request->validate([
            'email' => 'required',
            'password' =>'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($data)){
            return redirect('menu');
        }else{
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');

        }
    }

    // Kodingan Logout
    public function logout(){
        // dd('oke'); // Ini Vardump untuk Uji Coba Logout
        Auth::logout();
        return redirect('login')->with('success', 'Anda Berhasil Logout');
    }
}