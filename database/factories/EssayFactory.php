<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Essay>
 */
class EssayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement(\App\Models\User::pluck('id')->toArray()),
            'essay_title' => $this->faker->sentence(),
            'essay' => $this->faker->paragraph(),
        ];
    }
}
