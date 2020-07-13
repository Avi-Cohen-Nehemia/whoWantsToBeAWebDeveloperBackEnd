<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ["content", "difficulty", "amount"];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
