<?php

namespace App\Http\Controllers;

use App\Models\SelectGame;
use Illuminate\Http\Request;

class SelectGameController extends Controller
{
    public function getSelectGames(){
        $users = SelectGame::query()->get();
        return $users;
    }

    public function getSelectGamesWithSavedGame(){
        $users = SelectGame::with('games')->get();
        return $users;
    }
}
