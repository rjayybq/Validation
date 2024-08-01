<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserTask;
use Database\Factories\UserTaskFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserTask::factory(200)->create();
        // User::factory(10)->create();
        //user::factory()->count(200)->create();
        //User::factory()->create([
            //'name' => 'Test User',
           // 'email' => 'test@example.com',
        //]);
    }
}
