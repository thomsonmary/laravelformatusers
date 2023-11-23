<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateRps extends Model
{
    use HasFactory;

    protected $table = 'templaterps';
    protected $fillable = [
        'nama_template_rps',
        'aktifkan_rps',

    ];
}
