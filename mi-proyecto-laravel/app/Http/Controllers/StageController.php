<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function getStages(){
        $stages = Stage::query()->get();
        return $stages;
    }

    public function getStagesWithAnswers(){
        $stagesWithAnswers = Stage::with('answers')->get();
        return $stagesWithAnswers;
    }
}
