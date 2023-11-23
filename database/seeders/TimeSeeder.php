<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            'haritglblnthn' => "Kamis, 25 Mei 2023",
            'tahun' => '2023',
            'aktifkan_tahun' => 'Y',
        ]);
        DB::table('times')->insert([
            'haritglblnthn' => "Kamis, 26 Mei 2023",
            'tahun' => '2023',
            'aktifkan_tahun' => 'N',
        ]);
    }
}
