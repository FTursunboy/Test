<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassLectures>
 */
class ClassLecturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'classroom_id' => Classroom::factory(),
            'lecture_id' => Lecture::factory(),
            'order' => $this->faker->unique()->numberBetween(1, 10),
        ];
    }
}
