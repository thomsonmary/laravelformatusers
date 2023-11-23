<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dosen;
use App\Models\Kaprodi;
use App\Models\Semester;
use App\Models\BahanAjar;
use App\Models\Time;
use App\Models\MataKuliah;
use App\Models\TemplateRps;
use App\Models\TemplateSap;


class Rps extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'rps';
    protected $fillable = [
        'nama_rps',
        'identitas_mk',
        'team_teaching',
        'minggu_ke',
        'sub_cpmk',
        'bahan_kajian',
        'metode_pembelajaran',
        'estimasi_waktu',
        'bentuk_teknik',
        'indikator_penilaian',
        'bobot_penilaian',
        'norma_akademik',
        'nilai_akhir',
        'aturan_penilaian1',
        'aturan_penilaian2',
        'daftar_pustaka_wajib',
        'daftar_pustaka_pendukung',

    ];

    // KENAPA DI TARUH DI MODEL RPS ???
    // JAWAB :: 

    public function relasitabeldosen()
    {
        return $this->belongsToMany(Dosen::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }
    public function relasitabelkaprodi()
    {
        return $this->belongsToMany(Kaprodi::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }

    public function relasitabelsemester()
    {
        return $this->belongsToMany(Semester::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }
    public function relasitabelsap()
    {
        return $this->belongsToMany(Sap::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }

    public function relasitabelbahanajar()
    {
        return $this->belongsToMany(BahanAjar::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }

    public function relasitabeltime()
    {
        return $this->belongsToMany(Time::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }

    public function relasitabelmatakuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }

    public function relasitabeltemplaterps()
    {
        return $this->belongsToMany(TemplateRps::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }

    public function relasitabeltemplatesap()
    {
        return $this->belongsToMany(TemplateSap::class, 'relations')->withPivot([
            'rps_id', 'dosen_id', 'semester_id', 'validasi_gkm',
        ]);
    }




}




