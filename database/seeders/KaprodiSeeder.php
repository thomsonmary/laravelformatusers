<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kaprodi')->insert([
            'nama_kaprodi' => "Dr.Faiza Rini,M.Kom",
            'nidn_kaprodi' => "1013067901",
        ]);
    }
}
