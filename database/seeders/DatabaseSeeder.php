<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(rand(5,20))->create();
        User::factory(rand(5,20))->unverified()->create();
        User::factory(rand(5,20))->doNotRememberMe()->unverified()->create();
        User::factory(rand(5,20))->doNotRememberMe()->create();
    }
}
