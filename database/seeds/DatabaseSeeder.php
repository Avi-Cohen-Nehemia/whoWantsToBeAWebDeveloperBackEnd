<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Questions
        DB::table('questions')->insert([
            [
                'content' => 'Which of the following is the paragraph tag?',
                'difficulty' => 1,
            ],
            [
                'content' => 'Which of the following is the anchor tag?',
                'difficulty' => 1,
            ],
            [
                'content' => 'Which of the following is the largest heading tag?',
                'difficulty' => 2,
            ],
            [
                'content' => 'which tag is used to create an unordered list?',
                'difficulty' => 2,
            ],
            [
                'content' => 'What is the default file name of a website\'s home page?',
                'difficulty' => 3,
            ],
            [
                'content' => 'Which attribute prevents the user from submitting an empty input?',
                'difficulty' => 3,
            ],
            [
                'content' => 'Which of the following CSS syntax will change the <body> background to red?',
                'difficulty' => 4,
            ],
            [
                'content' => 'Which tag is used for multi-line input?',
                'difficulty' => 4,
            ],
            [
                'content' => 'What does HTML stand for?',
                'difficulty' => 5,
            ],
            [
                'content' => 'In CSS, what are vh and vw?',
                'difficulty' => 5,
            ],
        ]);

        // Answers
        DB::table('answers')->insert([

            // diffculty 1
            [
                'question_id' => 1,
                'answer' => "<p>",
                "correct" => true,
            ],
            [
                'question_id' => 1,
                'answer' => "<ol>",
                "correct" => false,
            ],
            [
                'question_id' => 1,
                'answer' => "<par>",
                "correct" => false,
            ],
            [
                'question_id' => 1,
                'answer' => "<fig>",
                "correct" => false,
            ],
            [
                'question_id' => 2,
                'answer' => "<link>",
                "correct" => false,
            ],
            [
                'question_id' => 2,
                'answer' => "<anchor>",
                "correct" => false,
            ],
            [
                'question_id' => 2,
                'answer' => "<a>",
                "correct" => true,
            ],
            [
                'question_id' => 2,
                'answer' => "<anc>",
                "correct" => false,
            ],

            // difficulty 2
            [
                'question_id' => 3,
                'answer' => "<h6>",
                "correct" => false,
            ],
            [
                'question_id' => 3,
                'answer' => "<largest-h>",
                "correct" => false,
            ],
            [
                'question_id' => 3,
                'answer' => "<h3>",
                "correct" => false,
            ],
            [
                'question_id' => 3,
                'answer' => "<h1>",
                "correct" => true,
            ],
            [
                'question_id' => 4,
                'answer' => "<ol>",
                "correct" => false,
            ],
            [
                'question_id' => 4,
                'answer' => "<list>",
                "correct" => false,
            ],
            [
                'question_id' => 4,
                'answer' => "<ul>",
                "correct" => true,
            ],
            [
                'question_id' => 4,
                'answer' => "<unordered>",
                "correct" => false,
            ],

            // difficulty 3
            [
                'question_id' => 5,
                'answer' => "default.html",
                "correct" => false,
            ],
            [
                'question_id' => 5,
                'answer' => "index.html",
                "correct" => true,
            ],
            [
                'question_id' => 5,
                'answer' => "home.html",
                "correct" => false,
            ],
            [
                'question_id' => 5,
                'answer' => "HTML.html",
                "correct" => false,
            ],
            [
                'question_id' => 6,
                'answer' => "required",
                "correct" => true,
            ],
            [
                'question_id' => 6,
                'answer' => "noskip",
                "correct" => false,
            ],
            [
                'question_id' => 6,
                'answer' => "fill",
                "correct" => false,
            ],
            [
                'question_id' => 6,
                'answer' => "must",
                "correct" => false,
            ],

            // difficulty 4
            [
                'question_id' => 7,
                'answer' => "body{background-color: red;}",
                "correct" => true,
            ],
            [
                'question_id' => 7,
                'answer' => "body: backgroundColor ~ red;}",
                "correct" => false,
            ],
            [
                'question_id' => 7,
                'answer' => "body{background-color-<red>}",
                "correct" => false,
            ],
            [
                'question_id' => 7,
                'answer' => "body: background-color=>red",
                "correct" => false,
            ],
            [
                'question_id' => 8,
                'answer' => "<textbox>",
                "correct" => false,
            ],
            [
                'question_id' => 8,
                'answer' => "<multi-line>",
                "correct" => false,
            ],
            [
                'question_id' => 8,
                'answer' => "<lines>",
                "correct" => false,
            ],
            [
                'question_id' => 8,
                'answer' => "<textarea>",
                "correct" => true,
            ],

            // difficulty 5
            [
                'question_id' => 9,
                'answer' => "HetroTest Made Linear",
                "correct" => false,
            ],
            [
                'question_id' => 9,
                'answer' => "HyperText Markup Language",
                "correct" => true,
            ],
            [
                'question_id' => 9,
                'answer' => "HeadachTension Mad Loco",
                "correct" => false,
            ],
            [
                'question_id' => 9,
                'answer' => "HydroTexting Max Linux",
                "correct" => false,
            ],
            [
                'question_id' => 10,
                'answer' => "vast-height/width",
                "correct" => false,
            ],
            [
                'question_id' => 10,
                'answer' => "viewport-based units",
                "correct" => true,
            ],
            [
                'question_id' => 10,
                'answer' => "CSS selectors",
                "correct" => false,
            ],
            [
                'question_id' => 10,
                'answer' => "Sudo classes",
                "correct" => false,
            ],
        ]);
    }
}
