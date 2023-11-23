<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sap')->insert([
            'nama_sap' => "Pemr.Web",
        ]);
        DB::table('sap')->insert([
            'nama_sap' => "Pemr.Objek",
        ]);
    }
}
