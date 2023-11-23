<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Administrator",
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'level' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => "dosen",
            'email' => 'dosen@dosen.com',
            'password' => Hash::make('12345678'),
            'level' => 'dosen'
        ]);
        DB::table('users')->insert([
            'name' => "gkm",
            'email' => 'gkm@gkm.com',
            'password' => Hash::make('12345678'),
            'level' => 'gkm'
        ]);
        DB::table('users')->insert([
            'name' => "HomeLess",
            'email' => 'homeless@homeless.com',
            'password' => Hash::make('12345678'),
            'level' => 'homeless'
        ]);

    }
}
