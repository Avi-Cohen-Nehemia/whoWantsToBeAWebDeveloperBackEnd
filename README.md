# Who Wants To Be A Web Developer
API containing multiple choice Web Development/coding questions.

## background
The back-end part of a full stack application built to sharpen our skills in PHP, building REST api using Laravel, and collaborating on a group project.  
This app was created by [Avi Cohen-Nehemia](https://github.com/Avi-Cohen-Nehemia) and [Maddy McMahon](https://github.com/mdm106).  
To see an example for how you can use this API, visit the front-end part of this project which can be found [here](https://avi-cohen-nehemia.github.io/whoWantsToBeAWebDeveloperFrontEnd/#/)

## Tech Stack / Framworks
- PHP
- Laravel
- REST API
- EC2 AWS deployment

## MVP
- Create 'Questions' and 'Answers' tables and establish a 'one to many' relationship between them.
- Make a GET route that returns a question and the 4 answers that are associated with it.

## Additional Features Implemented
- [x] Create a GET route that returns a random question with a specific difficulty level.
- [x] Create a DatabaseSeeder.
- [x] Create a 'Games' table which contains data about previous played games.
- [x] Create a POST route that stores the difficulty level the player reached when the game is over.
- [x] Create a GET route that returns how well the player did compared to previous players.
- [x] Added Resource to all get requests.

## Getting Started:
The Virtual Machine is already configured from ScotchBox, and the Vagrant Box set up to use Laravel's Homestead.

To get started:
1. Clone this repo and `cd` into folder
2. In your new directory, run `composer install`
3. Run `vendor/bin/homestead make`
4. Run: `cp .env.example .env`
5. inside .env change the db name, user and password to `homestead`, `root`, `secret`
6. in `homestead.yaml` change memory to 512
7. Run `vagrant up`
8. Login to the virtual machine: `vagrant ssh` (if asked for password it's 'vagrant')
9. Navigate `code` folder: `cd code`
10. Generate a new artisan key: `artisan key:generate`
11. Run the database migration: `artisan migrate`
12. Seed the database with data: `artisan db:seed`

Visit `http://homestead.test` on Mac or `http://localhost:8000` on Windows:

## General
All requests should:
* Use the basename [`http://ec2-18-130-184-16.eu-west-2.compute.amazonaws.com/api`]
* Be sent using JSON and with the `Accept: application/json` header
  
## End Points
- `/api/questions`
- `/api/games`

### Questions

### `GET /questions`
Will return a summary list of campsites associated with a region with the given id

#### example
```
http://ec2-18-130-184-16.eu-west-2.compute.amazonaws.com/api/questions
```
#### returns
```
{
    "data": [
        {
            "id": 1,
            "difficulty": "1",
            "content": "Which of the following is the paragraph tag?",
            "amount": "100",
            "answers": [
                {
                    "answer": "<p>",
                    "correct": 1
                },
                {
                    "answer": "<ol>",
                    "correct": 0
                },
                {
                    "answer": "<par>",
                    "correct": 0
                },
                {
                    "answer": "<fig>",
                    "correct": 0
                }
            ]
        },
        etc...
    ]
}
```  

### `GET /questions/{difficulty}`

Will return a single random question, from the available questions with the diffuculty specified in the request.

#### example
```
http://ec2-18-130-184-16.eu-west-2.compute.amazonaws.com/api/questions/5
```

#### returns
```
{
    "data": [
        {
            "id": 11,
            "difficulty": "5",
            "content": "Which of the following is not a tag used in HTML tables?",
            "amount": "1000",
            "answers": [
                {
                    "answer": "<tcol>",
                    "correct": 1
                },
                {
                    "answer": "<th>",
                    "correct": 0
                },
                {
                    "answer": "<td>",
                    "correct": 0
                },
                {
                    "answer": "<tr>",
                    "correct": 0
                }
            ]
        }
    ]
}
```  

### Statistics

### `GET /games/statistics`

Will return a number, represnting the percentage of players who did worse than the player who just finished a game.

### example
```
http://ec2-18-130-184-16.eu-west-2.compute.amazonaws.com/api/games/statistics
```

### returns
```
36
```

### `POST /games/statistics`

Post an integer between 1 and 15 that represents the final score of a finished game.

### example
```
axios.post('games/statistics', {score: currentDifficulty})
```

---

## Documentation

### Laravel:
Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### Scotch Box:
* Check out the official docs at: [box.scotch.io](https://box.scotch.io)
* [Read the getting started article](https://scotch.io/bar-talk/introducing-scotch-box-a-vagrant-lamp-stack-that-just-works)
* [Read the 3.5 release article](https://scotch.io/bar-talk/announcing-scotch-box-v35-and-scotch-box-pro-v15-the-big-switcheroo)