<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DBahanajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahanajar')->insert([
            'judul' => "PemrogramanWeb",
            'buku' => "PemrogramanWeb",
            'jurnal' => "PemrogramanWeb",
        ]);
        DB::table('bahanajar')->insert([
            'judul' => "PemrogramanObjek",
            'buku' => "PemrogramanObjek",
            'jurnal' => "PemrogramanObjek",
        ]);
    }
}
