<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getGames(){
        $users = Game::query()->get();
        return $users;
    }

    public function getGamesWithSelectGame(){
        $users = Game::with('select_games')->get();
        return $users;
    }
}
