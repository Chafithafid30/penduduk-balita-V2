<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class PenggunaController extends Controller
{
    // Function Index Untuk Nampilkan Halaman Data Pengguna
    public function index(){
        $users = User::all();
        return view('/pengguna', compact('users'));
    }

    // Function Hapus Data Pengguna
    public function destroy($id){
        $users = user::find($id);
        $users->delete();
        return back();
    }
}