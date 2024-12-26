<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user with known credentials
        User::factory()->create([
            'name' => 'Moller',
            'email' => 'Moller@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // Create 4 additional random users
        User::factory(4)->create();
    }
} 