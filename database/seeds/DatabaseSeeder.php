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
            [
                'content' => 'Which operator returns true if the two compared values are not equal?',
                'difficulty' => 6,
            ],
            [
                'content' => 'Which statement is the correct way to create a variable called rate and assign it the value 100?',
                'difficulty' => 6,
            ],
            [
                'content' => 'How would you reference the string \'avenue\' in the code shown?',
                'difficulty' => 7,
            ],
            [
                'content' => 'When would you use a conditional statement?',
                'difficulty' => 7,
            ],
            [
                'content' => 'What would be the result in the console of running this code: for (var i=0; i<5; i++){ console.log(i); }',
                'difficulty' => 8,
            ],
            [
                'content' => 'Which of the following operators can be used to do a short-circuit evaluation?',
                'difficulty' => 8,
            ],
            [
                'content' => 'What does the following expression evaluate to: [] == []',
                'difficulty' => 9,
            ],
            [
                'content' => 'Which statement is true about Functional Programming?',
                'difficulty' => 9,
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

            // difficulty 6
            [
                'question_id' => 11,
                'answer' => ">=<",
                "correct" => false,
            ],
            [
                'question_id' => 11,
                'answer' => "===",
                "correct" => false,
            ],
            [
                'question_id' => 11,
                'answer' => "==!",
                "correct" => false,
            ],
            [
                'question_id' => 11,
                'answer' => "!==",
                "correct" => true,
            ],
            [
                'question_id' => 12,
                'answer' => "let rate = 100;",
                "correct" => true,
            ],
            [
                'question_id' => 12,
                'answer' => "let 100 = rate;",
                "correct" => false,
            ],
            [
                'question_id' => 12,
                'answer' => "100 = let rate;",
                "correct" => false,
            ],
            [
                'question_id' => 12,
                'answer' => "rate = 100;",
                "correct" => false,
            ],

            // difficulty 7
            [
                'question_id' => 13,
                'answer' => "roadTypes.2",
                "correct" => false,
            ],
            [
                'question_id' => 13,
                'answer' => "roadTypes[3]",
                "correct" => false,
            ],
            [
                'question_id' => 13,
                'answer' => "roadTypes.3",
                "correct" => false,
            ],
            [
                'question_id' => 13,
                'answer' => "roadTypes[2]",
                "correct" => true,
            ],
            [
                'question_id' => 14,
                'answer' => "When you want to reuse a set of statements multiple times",
                "correct" => false,
            ],
            [
                'question_id' => 14,
                'answer' => "When you want your code to choose between multiple options",
                "correct" => true,
            ],
            [
                'question_id' => 14,
                'answer' => "When you want to group data together",
                "correct" => false,
            ],
            [
                'question_id' => 14,
                'answer' => "When you want to loop through a group of statement",
                "correct" => false,
            ],

            // difficulty 8
            [
                'question_id' => 15,
                'answer' => "12345",
                "correct" => false,
            ],
            [
                'question_id' => 15,
                'answer' => "1234",
                "correct" => false,
            ],
            [
                'question_id' => 15,
                'answer' => "01234",
                "correct" => true,
            ],
            [
                'question_id' => 15,
                'answer' => "012345",
                "correct" => false,
            ],
            [
                'question_id' => 16,
                'answer' => "++",
                "correct" => false,
            ],
            [
                'question_id' => 16,
                'answer' => "%",
                "correct" => false,
            ],
            [
                'question_id' => 16,
                'answer' => "==",
                "correct" => false,
            ],
            [
                'question_id' => 16,
                'answer' => "||",
                "correct" => true,
            ],

            // difficulty 9
            [
                'question_id' => 17,
                'answer' => "True",
                "correct" => false,
            ],
            [
                'question_id' => 17,
                'answer' => "False",
                "correct" => true,
            ],
            [
                'question_id' => 17,
                'answer' => "undefined",
                "correct" => false,
            ],
            [
                'question_id' => 17,
                'answer' => "[]",
                "correct" => false,
            ],
            [
                'question_id' => 18,
                'answer' => "Every object in the program has to be a function",
                "correct" => false,
            ],
            [
                'question_id' => 18,
                'answer' => "Code is grouped with the state it modifies.",
                "correct" => false,
            ],
            [
                'question_id' => 18,
                'answer' => "Side effecs are not allowed",
                "correct" => true,
            ],
            [
                'question_id' => 18,
                'answer' => "Everything has to be globally scoped",
                "correct" => false,
            ],
        ]);
    }
}
