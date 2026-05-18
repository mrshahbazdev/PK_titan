<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Demo Admin User
        // Login: username = admin, password = admin123
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@expediatravels.com',
            'password' => bcrypt('admin123'),
        ]);

        // Demo Regular User
        // Login: username = user, password = user123
        \App\Models\User::factory()->create([
            'name' => 'Demo User',
            'email' => 'user@expediatravels.com',
            'password' => bcrypt('user123'),
        ]);
    }
}
