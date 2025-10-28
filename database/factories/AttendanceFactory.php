<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Attendance>
 */
class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition(): array
    {
        $statuses = ['Present','Absent','Late','Excused'];
        return [
            'student_id' => Student::inRandomOrder()->first()->id ?? Student::factory(),
            'subject_id' => Subject::inRandomOrder()->first()->id ?? Subject::factory(),
            'date' => $this->faker->dateTimeBetween('-90 days', 'now')->format('Y-m-d'),
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
