<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\API\AnswersResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "difficulty" => $this->difficulty,
            "content" => $this->content,
            "amount" => $this->amount,
            "answers" => AnswersResource::collection($this->answers),
        ];
    }
}
