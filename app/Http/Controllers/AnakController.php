<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AnakController extends Controller
{
    // Function Index Untuk Nampilkan Halaman Data Anak

    public function index(){
        $anaks = Anak::all();
        return view('/Anak/anak', compact('anaks'));
    }

    // Function Update Anak Untuk Melakukan Update Di Halaman Anak
    public function updateAnak($id){
        $anaks = Anak::findOrFail($id);
        return view('/Anak/updateAnak', compact('anaks'));
    }

    // Functon update Anak untuk menyimpan data sudah diupdate
    public function update(Request $request, $id){
        $anaks = Anak::find($id);
        $request->validate([
            'nama_anak' => 'required',
            'tanggal_lahir_anak' => 'required',
            'jenis_kelamin' => 'required',
            'keterangan_anak'=> 'required',
        ]);

        $anaks->update([
            'nama_anak' => $request->nama_anak,
            'tanggal_lahir_anak' => $request->tanggal_lahir_anak,
            'jenis_kelamin' => $request->jenis_kelamin,
            'keterangan_anak' => $request->keterangan_anak,
        ]);
        return redirect('./Anak/anak');
    }

    //Function Destroy Untuk Delete Data Anak
    public function destroy($id){
        $anaks = Anak::find($id);
        $anaks->delete();

        return back();
    }
}