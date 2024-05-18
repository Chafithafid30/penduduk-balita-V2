<?php

namespace App\Http\Controllers;

use App\Models\ayah;
use App\Models\ibu;
use App\Models\anak;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    // Simpan Data
    public function store(Request $request){
        DB::transaction(function () use($request) {
            // Masukkan Data Ayah
            $ayah = ayah::create([
                'nama_ayah' => $request->input('NamaAyah'),
                'tanggal_lahir_ayah' => $request->input('TanggalLahirAyah'),
                'pekerjaan_ayah' => $request->input('PekerjaanAyah'),
                'alamat_ayah' => $request->input('AlamatAyah'),
                'RT_ayah' => $request->input('RTAyah'),
                'RW_ayah' => $request->input('RWAyah'),
            ]);

            //Masukkan Data Ibu
            $ibu = ibu::create([
                'nama_ibu'=>$request->input('NamaIbu'),
                'tanggal_lahir_ibu'=>$request->input('TanggalLahirIbu'),
                'pekerjaan_ibu'=>$request->input('PekerjaanIbu'),
                'alamat_ibu'=>$request->input('AlamatIbu'),
                'RT_ibu'=>$request->input('RTIbu'),
                'RW_ibu'=>$request->input('RWIbu'),
            ]);

            //Masukkan Data Anak
            $dataAnak = [];
            foreach($request->input('NamaAnak') as $index => $anak){
                if ($request->input('NamaAnak')[$index] != null && $request->input('TanggalLahirAnak')[$index] != null && $request->input('JenisKelaminAnak')[$index] != null && $request->input('StatusAnak')[$index] != null) {
                    $dataAnak[] = [
                        'ayah_id' => $ayah->id,
                        'ibu_id' => $ibu->id,
                        'nama_anak'=> $request->input('NamaAnak')[$index],
                        'tanggal_lahir_anak'=> $request->input('TanggalLahirAnak')[$index],
                        'jenis_kelamin'=>$request->input('JenisKelaminAnak')[$index],
                        'keterangan_anak'=>$request->input('StatusAnak')[$index],
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ];
                }
            }

            anak::insert($dataAnak);
        });

        return redirect('/');
    }
}