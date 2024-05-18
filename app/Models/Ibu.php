<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ibu extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['tanggal_lahir_ibu'];
    protected $fillable = [
        'nama_ibu',
        'tanggal_lahir_ibu',
        'pekerjaan_ibu',
        'alamat_ibu',
        'RT_ibu',
        'RW_ibu',
    ];

    public function anaks(){
        return $this->hasMany(Anak::class);
    }
}