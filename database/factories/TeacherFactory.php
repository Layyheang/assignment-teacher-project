<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'degree' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
            'tel' => $this->faker->phoneNumber,
        ];
    }
}
