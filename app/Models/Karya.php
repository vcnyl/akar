<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Exports\KaryaExport;

class Karya extends Model
{
    use HasFactory;
    protected $table='karya';
    protected $fillable = [
        'deskripsi',
        'dokumentasi',
        'link_karya',
        'nama',
        'id_karya',
        'bidang',
        'nim',
        'id_pengubah'
    ];


}
