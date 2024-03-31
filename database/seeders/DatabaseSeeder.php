<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Preference;
use App\Models\Essay;
use App\Models\Suit;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Profile::factory(10)->create();
        Preference::factory(10)->create();
        Essay::factory(10)->create();
        Suit::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
