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
                'amount' => '100'
            ],
            [
                'content' => 'Which of the following is the anchor tag?',
                'difficulty' => 1,
                'amount' => '100'
            ],
            [
                'content' => 'Which of the following is the largest heading tag?',
                'difficulty' => 2,
                'amount' => '200'
            ],
            [
                'content' => 'which tag is used to create an unordered list?',
                'difficulty' => 2,
                'amount' => '200'
            ],
            [
                'content' => 'What is the default file name of a website\'s home page?',
                'difficulty' => 3,
                'amount' => '300'
            ],
            [
                'content' => 'Which attribute prevents the user from submitting an empty input?',
                'difficulty' => 3,
                'amount' => '300'
            ],
            [
                'content' => 'Which of the following CSS syntax will change the <body> background to red?',
                'difficulty' => 4,
                'amount' => '500'
            ],
            [
                'content' => 'Which tag is used for multi-line input?',
                'difficulty' => 4,
                'amount' => '500'
            ],
            [
                'content' => 'What does HTML stand for?',
                'difficulty' => 5,
                'amount' => '1000'
            ],
            [
                'content' => 'In CSS, what are vh and vw?',
                'difficulty' => 5,
                'amount' => '1000'
            ],
            [
                'content' => 'Which of the following is not a tag used in HTML tables?',
                'difficulty' => 5,
                'amount' => '1000'
            ],
            [
                'content' => 'Which operator returns true if the two compared values are not equal?',
                'difficulty' => 6,
                'amount' => '2000'
            ],
            [
                'content' => 'Which statement is the correct way to create a variable called rate and assign it the value 100?',
                'difficulty' => 6,
                'amount' => '2000'
            ],
            [
                'content' => 'How would you reference the string \'avenue\' in the code shown? let roadTypes = ["street", "road", "avenue", "circle"];',
                'difficulty' => 7,
                'amount' => '4000'
            ],
            [
                'content' => 'When would you use a conditional statement?',
                'difficulty' => 7,
                'amount' => '4000'
            ],
            [
                'content' => 'What would be the result in the console of running this code: for (var i=0; i<5; i++){ console.log(i); }',
                'difficulty' => 8,
                'amount' => '8000'
            ],
            [
                'content' => 'Which of the following operators can be used to do a short-circuit evaluation?',
                'difficulty' => 8,
                'amount' => '8000'
            ],
            [
                'content' => 'What does the following expression evaluate to: [] == []',
                'difficulty' => 9,
                'amount' => '16000'
            ],
            [
                'content' => 'Which statement is true about Functional Programming?',
                'difficulty' => 9,
                'amount' => '16000'
            ],
            [
                'content' => 'What does CORS stand for?',
                'difficulty' => 10,
                'amount' => '32000'
            ],
            [
                'content' => 'Which of the following regular expressions would NOT match \'question answer\'?',
                'difficulty' => 10,
                'amount' => '32000'
            ],
            [
                'content' => 'Which of the following is a valid Javascript string method?',
                'difficulty' => 11,
                'amount' => '64000'
            ],
            [
                'content' => 'What is an example of dynamic binding?',
                'difficulty' => 11,
                'amount' => '64000'
            ],
            [
                'content' => 'What is the title that accompanies the 304 HTTP status code?',
                'difficulty' => 12,
                'amount' => '125000'
            ],
            [
                'content' => 'At which company was Javascript created?',
                'difficulty' => 12,
                'amount' => '125000'
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
            [
                'question_id' => 11,
                'answer' => "<tcol>",
                "correct" => true,
            ],
            [
                'question_id' => 11,
                'answer' => "<th>",
                "correct" => false,
            ],
            [
                'question_id' => 11,
                'answer' => "<td>",
                "correct" => false,
            ],
            [
                'question_id' => 11,
                'answer' => "<tr>",
                "correct" => false,
            ],

            // difficulty 6
            [
                'question_id' => 12,
                'answer' => ">=<",
                "correct" => false,
            ],
            [
                'question_id' => 12,
                'answer' => "===",
                "correct" => false,
            ],
            [
                'question_id' => 12,
                'answer' => "==!",
                "correct" => false,
            ],
            [
                'question_id' => 12,
                'answer' => "!==",
                "correct" => true,
            ],
            [
                'question_id' => 13,
                'answer' => "let rate = 100;",
                "correct" => true,
            ],
            [
                'question_id' => 13,
                'answer' => "let 100 = rate;",
                "correct" => false,
            ],
            [
                'question_id' => 13,
                'answer' => "100 = let rate;",
                "correct" => false,
            ],
            [
                'question_id' => 13,
                'answer' => "rate = 100;",
                "correct" => false,
            ],

            // difficulty 7
            [
                'question_id' => 14,
                'answer' => "roadTypes.2",
                "correct" => false,
            ],
            [
                'question_id' => 14,
                'answer' => "roadTypes[3]",
                "correct" => false,
            ],
            [
                'question_id' => 14,
                'answer' => "roadTypes.3",
                "correct" => false,
            ],
            [
                'question_id' => 14,
                'answer' => "roadTypes[2]",
                "correct" => true,
            ],
            [
                'question_id' => 15,
                'answer' => "When you want to reuse a set of statements multiple times",
                "correct" => false,
            ],
            [
                'question_id' => 15,
                'answer' => "When you want your code to choose between multiple options",
                "correct" => true,
            ],
            [
                'question_id' => 15,
                'answer' => "When you want to group data together",
                "correct" => false,
            ],
            [
                'question_id' => 15,
                'answer' => "When you want to loop through a group of statement",
                "correct" => false,
            ],

            // difficulty 8
            [
                'question_id' => 16,
                'answer' => "12345",
                "correct" => false,
            ],
            [
                'question_id' => 16,
                'answer' => "1234",
                "correct" => false,
            ],
            [
                'question_id' => 16,
                'answer' => "01234",
                "correct" => true,
            ],
            [
                'question_id' => 16,
                'answer' => "012345",
                "correct" => false,
            ],
            [
                'question_id' => 17,
                'answer' => "++",
                "correct" => false,
            ],
            [
                'question_id' => 17,
                'answer' => "%",
                "correct" => false,
            ],
            [
                'question_id' => 17,
                'answer' => "==",
                "correct" => false,
            ],
            [
                'question_id' => 17,
                'answer' => "||",
                "correct" => true,
            ],

            // difficulty 9
            [
                'question_id' => 18,
                'answer' => "True",
                "correct" => false,
            ],
            [
                'question_id' => 18,
                'answer' => "False",
                "correct" => true,
            ],
            [
                'question_id' => 18,
                'answer' => "undefined",
                "correct" => false,
            ],
            [
                'question_id' => 18,
                'answer' => "[]",
                "correct" => false,
            ],
            [
                'question_id' => 19,
                'answer' => "Every object in the program has to be a function",
                "correct" => false,
            ],
            [
                'question_id' => 19,
                'answer' => "Code is grouped with the state it modifies.",
                "correct" => false,
            ],
            [
                'question_id' => 19,
                'answer' => "Side effects are not allowed",
                "correct" => true,
            ],
            [
                'question_id' => 19,
                'answer' => "Everything has to be globally scoped",
                "correct" => false,
            ],

            // difficulty 10
            [
                'question_id' => 20,
                'answer' => "Cross Output Resource Sharing",
                "correct" => false,
            ],
            [
                'question_id' => 20,
                'answer' => "Combined Origin Request Source",
                "correct" => false,
            ],
            [
                'question_id' => 20,
                'answer' => "Core Output Resource Support",
                "correct" => false,
            ],
            [
                'question_id' => 20,
                'answer' => "Cross Origin Resource Sharing",
                "correct" => true,
            ],
            [
                'question_id' => 21,
                'answer' => "[A-Za-z]*\s\w{3,10}",
                "correct" => false,
            ],
            [
                'question_id' => 21,
                'answer' => "\w+\s+\w+",
                "correct" => false,
            ],
            [
                'question_id' => 21,
                'answer' => "[A-Za-z]*\S+\w+",
                "correct" => true,
            ],

            // difficulty 11
            [
                'question_id' => 22,
                'answer' => "padEnd()",
                "correct" => true,
            ],
            [
                'question_id' => 22,
                'answer' => "combine()",
                "correct" => false,
            ],
            [
                'question_id' => 22,
                'answer' => "pad()",
                "correct" => false,
            ],
            [
                'question_id' => 22,
                'answer' => "ends()",
                "correct" => false,
            ],
            [
                'question_id' => 23,
                'answer' => "Any method",
                "correct" => false,
            ],
            [
                'question_id' => 23,
                'answer' => "Compiling",
                "correct" => false,
            ],
            [
                'question_id' => 23,
                'answer' => "Method overloading",
                "correct" => false,
            ],
            [
                'question_id' => 23,
                'answer' => "Method overriding",
                "correct" => true,
            ],
            // difficulty 12
            [
                'question_id' => 24,
                'answer' => "Switch Proxy",
                "correct" => false,
            ],
            [
                'question_id' => 24,
                'answer' => "Moved Permanently",
                "correct" => false,
            ],
            [
                'question_id' => 24,
                'answer' => "Not Modified",
                "correct" => true,
            ],
            [
                'question_id' => 24,
                'answer' => "Temporary Redirect",
                "correct" => false,
            ],
            [
                'question_id' => 25,
                'answer' => "Netscape",
                "correct" => true,
            ],
            [
                'question_id' => 25,
                'answer' => "Zend Technologies",
                "correct" => false,
            ],
            [
                'question_id' => 25,
                'answer' => "Sun Micosystems",
                "correct" => false,
            ],
            [
                'question_id' => 25,
                'answer' => "Research Software Ltd.",
                "correct" => false,
            ],
        ]);
    }
}
