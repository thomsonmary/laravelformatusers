<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            TemplateRpsSeeder::class,
            TemplateSapSeeder::class,
            SemesterSeeder::class,
            RpsSeeder::class,
            SapSeeder::class,
            MatakuliahSeeder::class,
            KaprodiSeeder::class,
            DosenSeeder::class,
            DBahanajarSeeder::class,
            TimeSeeder::class,
        ]);
    }
}
