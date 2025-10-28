<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendancesTableSeeder extends Seeder
{
    public function run(): void
    {
        Attendance::factory()->count(200)->create();
    }
}
