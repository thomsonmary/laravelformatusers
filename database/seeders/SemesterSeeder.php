<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            'semester' => "Semester Ganjil 2022/2023",
        ]);
        DB::table('semesters')->insert([
            'semester' => "Semester Genap 2022/2023",
        ]);
        DB::table('semesters')->insert([
            'semester' => "Semester Ganjil 2023/2024",
        ]);
        DB::table('semesters')->insert([
            'semester' => "Semester Genap 2023/2024",
        ]);

    }
}
