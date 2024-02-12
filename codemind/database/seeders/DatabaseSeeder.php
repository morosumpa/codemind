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
        $this->call(questionsSeeder::class);
        $this->call(answersSeeder::class);
        $this->call(userAnswersSeeder::class);
        $this->call(usersSeeder::class);
    }
}
