<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;

    protected $table = 'relations';
    protected $fillable = [
        'rps_id',  
        'sap_id',  
        'mata_kuliah_id',  
        'dosen_id',  
        'kaprodi_id',  
        'semester_id',  
        'time_id',  
        'template_rps_id',  
        'template_sap_id',  
        'bahan_ajar_id',  
        'validasi_gkm',  


    ];
  

}
