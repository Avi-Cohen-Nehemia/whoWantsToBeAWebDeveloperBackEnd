<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Http\Resources\API\QuestionResource;

class Questions extends Controller
{
    public function index()
    {
        return QuestionResource::collection(Question::all());

        // will return all the questions with difficulty of 1
        // return QuestionResource::collection(Question::where("difficulty", 1)->get());
    }

    public function show($difficulty)
    {
        // will return all the questions with a certain difficulty
        return QuestionResource::collection(Question::where("difficulty", $difficulty)->get());
    }
}
