<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;
use Carbon\Carbon;
class IbuController extends Controller
{
    // Function Index Untuk Nampilkan Data
    public function index(){
        $ibus = Ibu::all();
        return view('/Ibu/ibu', compact('ibus'));
    }


    // Function Editing Data Ibu

    public function updateIbu($id){
        $ibus = Ibu::findOrFail($id);
        return view('/Ibu/updateIbu', compact('ibus'));
    }


    // Function Update Data Ibu
    public function update(Request $request, $id){
        $ibus = Ibu::find($id);
        $request->validate([
            'nama_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu'=> 'required',
            'RT_ibu'=>'required',
            'RW_ibu'=>'required',
        ]);

        $ibus->update([
            'nama_ibu' => $request->nama_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'alamat_ibu' => $request->alamat_ibu,
            'RT_ibu' => $request->RT_ibu,
            'RW_ibu' => $request->RW_ibu,
        ]);
        return redirect('./Ibu/ibu');
    }

    // Function Hapus Data Ibu
    public function destroy($id){
        $ibus = Ibu::find($id);
        $ibus->delete();

        return back();
    }
}
