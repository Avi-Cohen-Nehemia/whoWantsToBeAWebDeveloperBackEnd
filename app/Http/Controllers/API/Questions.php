<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;
use App\Http\Resources\API\QuestionResource;

class Questions extends Controller
{
    public function index()
    {
        // will return all question in the database
        return QuestionResource::collection(Question::all());
    }

    public function show($difficulty)
    {
        // will return all the questions with a certain difficulty
        return QuestionResource::collection(Question::where("difficulty", $difficulty)->get());
    }
}
