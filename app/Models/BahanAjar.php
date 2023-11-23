<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanAjar extends Model
{
    use HasFactory;

    protected $table = 'bahanajar';
    protected $fillable = [
        'judul',
        'buku',
        'jurnal',


    ];

}
