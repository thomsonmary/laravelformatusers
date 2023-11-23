<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliah')->insert([
            'nama_mk' => "Pemrograman Web",
            'kode_mk' => "TI1010",
            'sks_mk' => "3",
            'semester_rps' => "Genap2022/2023",
            'kota_waktu' => "Padang, 17 Mei 2023",
            'ketua_prodi' => "Faiza",
            'sinopsis_mk' => "P.web adalah...",
            'cpl_prodi' => "Cpl prodi adalah...",
            'media_software' => "xampp",
            'media_hardware' => "laptop",
            'prasyarat_mk' => "Algo",
        ]);
        DB::table('matakuliah')->insert([
            'nama_mk' => "Pemrograman Objek",
            'kode_mk' => "TI2020",
            'sks_mk' => "3",
            'semester_rps' => "Ganjil2022/2023",
            'kota_waktu' => "Padang 16 Mei 2023",
            'ketua_prodi' => "Rini",
            'sinopsis_mk' => "P.objek adalah...",
            'cpl_prodi' => "Cpl prodi adalah...",
            'media_software' => "xampp8",
            'media_hardware' => "PC labor",
            'prasyarat_mk' => "Algo",
        ]);

    }
}
