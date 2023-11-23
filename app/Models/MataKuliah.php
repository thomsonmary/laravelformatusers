<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';
    protected $fillable = [
        'nama_mk',
        'kode_mk',
        'sks_mk',
        'semester_rps',
        'kota_waktu',
        'ketua_prodi',
        'cpl_prodi',
        'media_software',
        'media_hardware',
        'prasyarat_mk',


    ];





}
