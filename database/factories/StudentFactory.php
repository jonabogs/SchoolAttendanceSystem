<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        $years = ['11', '12', '13'];
        $sections = ['A', 'B', 'C', 'D'];
        return [
            'name' => $this->faker->name(),
            'section' => $this->faker->randomElement($sections),
            'year_level' => $this->faker->randomElement($years),
        ];
    }
}
