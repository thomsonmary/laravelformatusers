<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templatesap')->insert([
            'nama_template_sap' => "Pertama",
        ]);
        DB::table('templatesap')->insert([
            'nama_template_sap' => "Kedua",
        ]);

    }
}
