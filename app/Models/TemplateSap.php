<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSap extends Model
{
    use HasFactory;

    protected $table = 'templatesap';
    protected $fillable = [
        'nama_template_sap',
        'aktifkan_sap',

    ];



}
