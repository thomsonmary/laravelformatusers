<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class TemplateRpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templaterps')->insert([
            'nama_template_rps' => "Pertama",
        ]);
        DB::table('templaterps')->insert([
            'nama_template_rps' => "Kedua",
        ]);
    }
}
