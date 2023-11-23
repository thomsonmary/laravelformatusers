<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            'nama_dosen' => "Dr.Faiza Rini,M.Kom",
            'nidn_dosen' => "1013067901",
        ]);
        DB::table('dosens')->insert([
            'nama_dosen' => "Anggri Y Pernanda, M.Kom",
            'nidn_dosen' => "1001079301",
        ]);
        DB::table('dosens')->insert([
            'nama_dosen' => "Thomson Mary, M.Kom​",
            'nidn_dosen' => "1017058002",
        ]);
        DB::table('dosens')->insert([
            'nama_dosen' => "Ade Pratama, M.Kom",
            'nidn_dosen' => "1020048403",
        ]);
        DB::table('dosens')->insert([
            'nama_dosen' => "Mourend Devegi, M.Kom",
            'nidn_dosen' => "1005108802",
        ]);
        DB::table('dosens')->insert([
            'nama_dosen' => "Rahayu T Untari, M.Kom",
            'nidn_dosen' => "1019028901",
        ]);
    }
}
