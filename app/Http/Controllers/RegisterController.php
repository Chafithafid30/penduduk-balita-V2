<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

   public function register_proses(Request $request){
    // dd($request->all()); // Ini kodingan untuk vardump Register
    $request->validate([
        'nama'=> 'required',
        'email'=> 'required|email|unique:users,email',
        'password'=> 'required|min:6'
    ]);

    $data['name'] = $request->nama;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);

    User::create($data);
    $register = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($register)){
            return redirect('menu');
        }else{
            return redirect('login')->with('error', 'Email atau Password Salah');

        }

    }

}