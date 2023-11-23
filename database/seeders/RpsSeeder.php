<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rps')->insert([
            'nama_rps' => "Pemr.Web",
            'identitas_mk' => "Pemr.Web dg Laravel",
            'team_teaching' => "Anggri",
            'minggu_ke' => "2",
            'sub_cpmk' => "Login Laravel",
            'bahan_kajian' => "Pemr.web.dasar",
            'metode_pembelajaran' => "Praktik.di.labor",
            'estimasi_waktu' => "2x50Menit",
            'bentuk_teknik' => "pemb.luring",
            'indikator_penilaian' => "indikator..",
            'bobot_penilaian' => "100",
            'norma_akademik' => "norma",
            'nilai_akhir' => "100",
            'aturan_penilaian1' => "aturan1",
            'aturan_penilaian2' => "aturan2",
            'daftar_pustaka_wajib' => "buku1,2,3,4",
            'daftar_pustaka_pendukung' => "buku5,6,7,8",
        ]);
        DB::table('rps')->insert([
            'nama_rps' => "Pemr.Objek",
            'identitas_mk' => "Pemr.Objek dg PHP",
            'team_teaching' => "Mourend",
            'minggu_ke' => "4",
            'sub_cpmk' => "Polymorphism",
            'bahan_kajian' => "Class.dan.objek",
            'metode_pembelajaran' => "Praktik.di.labor",
            'estimasi_waktu' => "2x50Menit",
            'bentuk_teknik' => "pemb.luring",
            'indikator_penilaian' => "indikator..",
            'bobot_penilaian' => "100",
            'norma_akademik' => "norma",
            'nilai_akhir' => "100",
            'aturan_penilaian1' => "aturan1",
            'aturan_penilaian2' => "aturan2",
            'daftar_pustaka_wajib' => "buku7,8,9,10",
            'daftar_pustaka_pendukung' => "buku11,12,13,14",
        ]);

    }
}
