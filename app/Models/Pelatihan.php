<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;
    protected $table='pelatihan';
    protected $fillable = [
        'id_pelatihan',
        'bidang',
        'deskripsi',
        'nama',
        'tahun_pelaksanaan',
        'nim',
        'id_pengubah',
        'sertifikat',
    ];

}
