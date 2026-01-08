<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@ehb.be',
            'password' => 'Password!321',
            'is_admin' => 1
        ]);

        User::factory()->create([
            'name' => 'User1',
            'email' => 'user1@ehb.be',
            'password' => 'Password!321',
            'is_admin' => 0
        ]);

        User::factory()->create([
            'name' => 'User2',
            'email' => 'user2@ehb.be',
            'password' => 'Password!321',
            'is_admin' => 0
        ]);
    }
}
