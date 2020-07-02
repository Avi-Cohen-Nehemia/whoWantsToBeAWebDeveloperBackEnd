<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
            [
                'content' => 'Which country is the biggest country in the world?',
                'difficulty' => 2,
            ],
        ]);

        // Answers
        DB::table('answers')->insert([
            [
                'question_id' => 1,
                'answer' => "Avi",
                "correct" => true,
            ],
            [
                'question_id' => 1,
                'answer' => "Dan",
                "correct" => false,
            ],
            [
                'question_id' => 1,
                'answer' => "Bob",
                "correct" => false,
            ],
            [
                'question_id' => 1,
                'answer' => "Craig",
                "correct" => false,
            ],
            [
                'question_id' => 2,
                'answer' => "29",
                "correct" => true,
            ],
            [
                'question_id' => 2,
                'answer' => "30",
                "correct" => false,
            ],
            [
                'question_id' => 2,
                'answer' => "15",
                "correct" => false,
            ],
            [
                'question_id' => 2,
                'answer' => "99",
                "correct" => false,
            ],
            [
                'question_id' => 3,
                'answer' => "Poland",
                "correct" => true,
            ],
            [
                'question_id' => 3,
                'answer' => "Alaska",
                "correct" => false,
            ],
            [
                'question_id' => 3,
                'answer' => "Brazil",
                "correct" => false,
            ],
            [
                'question_id' => 3,
                'answer' => "Russia",
                "correct" => false,
            ],
        ]);
    }
}
