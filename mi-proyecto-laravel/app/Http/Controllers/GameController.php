<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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

    public function createNewGame(Request $request){
        try {
            Log::info("Creating new game");

            // VALIDACION PARA COMPROBAR SI EL CHARACTER PERTENECE AL USER
            // AUTOMATIZAR CAMPOS
            $characterId = $request->input('character_id');
            $selectGameId = $request->input('select_game_id');
            $difficulty = $request->input('difficulty');

            $newGame = new Game();
            $newGame->character_id = $characterId;
            $newGame->select_game_id = $selectGameId;
            $newGame->difficulty = $difficulty;
            $newGame->save();

            return response()->json([
                'success' => true,
                'message' => 'New Game created',
                'data' => $newGame],200);
        } catch (\Throwable $th){
            Log::error('CREATING NEW GAME: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error creating new game"],500);
        }
    }
}
