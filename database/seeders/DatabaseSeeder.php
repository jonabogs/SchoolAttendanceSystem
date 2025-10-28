<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            StudentsTableSeeder::class,
            SubjectsTableSeeder::class,
            AttendancesTableSeeder::class,
        ]);
    }
}
