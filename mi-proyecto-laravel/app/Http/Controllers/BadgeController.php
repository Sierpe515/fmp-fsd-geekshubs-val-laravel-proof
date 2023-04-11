<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use Illuminate\Http\Request;

class BadgeController extends Controller
{
    public function getBadges(){
        $badge = Badge::query()->get();
        return $badge;
    }

    public function getBadgesWithAnswers(){
        $answersWithStage = Badge::with('answers')->get();
        return $answersWithStage;
    }
}
