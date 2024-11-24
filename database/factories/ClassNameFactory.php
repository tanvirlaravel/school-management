<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassName>
 */
class ClassNameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Bangla', 'English', 'Math', 'Chemistry', 'Biology']) . '-' . $this->faker->numberBetween(1, 5),
            // 'teacher_id' => teacher-id goes here,
        ];
    }
}
