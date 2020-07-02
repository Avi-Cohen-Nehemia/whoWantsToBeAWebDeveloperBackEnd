<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Questions
        DB::table('questions')->insert([
            [
                'content' => 'What is my name?',
                'difficulty' => 1,
            ],
            [
                'content' => 'What is my age?',
                'difficulty' => 1,
            ],
        ]);
    }
}
