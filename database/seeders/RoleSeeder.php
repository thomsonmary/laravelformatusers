<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => "admin",
        ]);
        DB::table('roles')->insert([
            'role' => "dosen",
        ]);
        DB::table('roles')->insert([
            'role' => "gkm",
        ]);
        DB::table('roles')->insert([
            'role' => "homeless",
        ]);

    }
}
