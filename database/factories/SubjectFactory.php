<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition(): array
    {
        $subjects = ['Mathematics','Science','English','Filipino','History','ICT','PE','Arts','Economics','Biology'];
        return [
            'subject_name' => $this->faker->unique()->randomElement($subjects),
            'teacher_name' => $this->faker->name(),
        ];
    }
}
