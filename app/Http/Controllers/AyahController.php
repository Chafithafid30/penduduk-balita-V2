<?php

namespace App\Http\Controllers;

use App\Models\Ayah;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AyahController extends Controller
{
    // Function Index Untuk Nampilkan Halaman Data Ayah
    public function index(){
        $ayahs = Ayah::all();
        return view('/Ayah/ayah', compact('ayahs'));
    }

    // Function Untuk Editing Data Ayah
    public function updateAyah($id){
        $ayahs = ayah::findOrFail($id);
        return view('/Ayah/updateAyah', compact('ayahs'));
    }


    // Function Update Data Ayah
    public function update(Request $request, $id){
        $ayahs = ayah::find($id);
        $request->validate([
            'nama_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'RT_ayah' => 'required',
            'RW_ayah' => 'required',
        ]);

        $ayahs->update([
            'nama_ayah'=>$request->nama_ayah,
            'tanggal_lahir_ayah'=>$request->tanggal_lahir_ayah,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'alamat_ayah'=>$request->alamat_ayah,
            'RT_ayah'=>$request->RT_ayah,
            'RW_ayah'=>$request->RW_ayah,
        ]);

        return redirect('./Ayah/ayah');
    }

    // Function Hapus Data Ayah
    public function destroy($id){
        $ayahs = ayah::find($id);
        $ayahs->delete();
        return back();
    }
}