<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function getAnswers(){
        $answer = Answer::query()->get();
        return $answer;
    }

    // GET ANSWERS WITH STAGE AND BADGE
    public function getAnswersWithStage(){
        $answersWithStage = Answer::with('stage', 'badge')->get();
        return $answersWithStage;
    }
}
