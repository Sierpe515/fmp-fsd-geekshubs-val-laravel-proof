<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameStage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function getGamesWithGameStage(){
        $users = Game::with('games_stages')->get();
        return $users;
    }

    public function getGamesWithAllInfo(){
        $users = Game::with('select_games', 'games_stages')->get();
        return $users;
    }

    public function getGamesWithSelectGameByCharacter($id){
        try { 
            $gamesWithSelectGameByCharacter = Game::with('select_games', 'games_stages')
            ->where('character_id', $id)
            ->where('finished', '!=', 1)
            ->get();

            return [
                'success' => true,
                'data' => $gamesWithSelectGameByCharacter
            ];
        } catch (\Throwable $th){
            return response()->json([ 
                'success' => false,
                'message' => $th->getMessage()],500);
        } 
    }

    public function getGamesWithSelectGameById($id){
        try {          
            $gamesWithSelectGameByCharacter = Game::with('select_games', 'games_stages')
            ->where('id', $id)
            ->get();

            return [
                'success' => true,
                'data' => $gamesWithSelectGameByCharacter
            ];
        } catch (\Throwable $th){
            return response()->json([ 
                'success' => false,
                'message' => $th->getMessage()],500);
        } 
    }

    public function createNewGame(Request $request){
        try {
            Log::info("Creating new game");

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

    public function updateMadnessGame(Request $request){
        try {
            Log::info("Updating madness at game");

            $id = $request->input('id');
            $madness = $request->input('madness');

            $updateMadnessValue = Game::find($id);
            $updateMadnessValue->madness += $madness;
            $updateMadnessValue->save();

            return response()->json([
                'success' => true,
                'message' => 'madness at game updated successfully',
                'data' => $updateMadnessValue],200);
        } catch (\Throwable $th){
            Log::error('SAVING GAME: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error updating madness at game"],500);
        }
    }

    public function updateFinishedGame(Request $request){
        try {
            Log::info("Updating finished at game");

            $id = $request->input('id');
            $finished = $request->input('finished');

            $updateFinishedValue = Game::find($id);
            $updateFinishedValue->finished = $finished;
            $updateFinishedValue->save();

            return response()->json([
                'success' => true,
                'message' => 'finished at game updated successfully',
                'data' => $updateFinishedValue],200);
        } catch (\Throwable $th){
            Log::error('SAVING GAME: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error updating finished at game"],500);
        }
    }

    public function updateGuideGame(Request $request){
        try {
            Log::info("Updating guide at game");

            $id = $request->input('id');
            $guide = $request->input('guide');

            $updateGuideValue = Game::find($id);
            $updateGuideValue->guide = $guide;
            $updateGuideValue->save();

            return response()->json([
                'success' => true,
                'message' => 'Guide at game updated successfully',
                'data' => $updateGuideValue],200);
        } catch (\Throwable $th){
            Log::error('SAVING GAME: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error updating guide at game"],500);
        }
    }

    public function createSavedGame(Request $request){
        try {
            Log::info("Saving game");

            $gameId = $request->input('game_id');
            $stageId = $request->input('stage_id');
            $answerId = $request->input('answer_id');

            $newSavedGame = new GameStage();
            $newSavedGame->game_id = $gameId;
            $newSavedGame->stage_id = $stageId;
            $newSavedGame->answer_id = $answerId;
            $newSavedGame->save();

            return response()->json([
                'success' => true,
                'message' => 'Game saved successfully',
                'data' => $newSavedGame],200);
        } catch (\Throwable $th){
            Log::error('SAVING GAME: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error saving game"],500);
        }
    }

    // UPDATE ANSWER AT SAVED GAME
    public function updateSavedGame(Request $request){
        try {
            Log::info("Updating saved game");

            $id = $request->input('id');
            $answerId = $request->input('answer_id');

            $updateSavedGame = GameStage::find($id);
            $updateSavedGame->answer_id = $answerId;
            $updateSavedGame->save();

            return response()->json([
                'success' => true,
                'message' => 'Saved game updated successfully',
                'data' => $updateSavedGame],200);
        } catch (\Throwable $th){
            Log::error('SAVING GAME: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error updating saved game"],500);
        }
    }

    public function deleteSavedGameByAdmin($id){
        try {
            Game::destroy($id);
    
            return response()->json([
                'success' => true,
                'message' => 'Game deleted'
            ],200);
        } catch (\Throwable $th){
            return response()->json([ 
                'success' => false,
                'message' => $th->getMessage()],500);
        }  
    }
}

