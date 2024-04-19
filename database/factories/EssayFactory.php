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
            'essay_title' => $this->faker->randomElement([
                    'Describe yourself (personality/attitude/passion/beliefs)',
                    'Describe the type of person you\'d like to meet',
                    'Describe the ideal realationship',
                    'Share someting unusual or extra special about yourself',
                    'What kind of pets do you have?',
                    'Is there anything else you\'d like to share?',
                    'What should a great date consist of?',
                    'Describe your work/business and what it means to you',
                    'What do you like to do for fun/activities?',
                    'What are you most passionate about?',
                    'What is the top priority in your life right now?',
                    'What type of travel do you enjoy?',
                    'Describe your ideal honeymoon',
                    'What types of books/authors do you enjoy and why?',
                    'What are some of your favorite movies/films/actors?',
                    'What kind of music moves you?',
                    'What makes you smile?',
                ]),
            'essay' => $this->faker->paragraph(),
        ];
    }
}
