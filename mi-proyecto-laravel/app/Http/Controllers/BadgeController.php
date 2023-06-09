<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\GameBadge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    // GET BADGES BY GAME ID EXCEPT BADGE ID 1
    public function getBadgesByGameId($id){
        try {
            $gamesWithSelectGameByCharacter = GameBadge::with('game','badge')
            ->where('game_id', $id)
            ->whereNot('badge_id', 1)
            ->whereNot('isActive', 0)
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

    public function addBadgeToGame(Request $request){
        try {
            Log::info("Adding badge to game");

            $gameId = $request->input('game_id');
            $badgeId = $request->input('badge_id');

            $addBadge = new GameBadge();
            $addBadge->game_id = $gameId;
            $addBadge->badge_id = $badgeId;
            $addBadge->save();

            return response()->json([
                'success' => true,
                'message' => 'Badge added successfully',
                'data' => $addBadge],200);
        } catch (\Throwable $th){
            Log::error('ADDING BADGE: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error adding badge to game"],500);
        }
    }

    public function consumeBadge(Request $request){
        try {
            Log::info("Consuming badge to game");

            $id = $request->input('id');
            $isActive = false;

            $updateSavedGame = GameBadge::find($id);
            $updateSavedGame->isActive = $isActive;
            $updateSavedGame->save();

            return response()->json([
                'success' => true,
                'message' => 'Badge consumed',
                'data' => $updateSavedGame],200);
        } catch (\Throwable $th){
            Log::error('SAVING GAME: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error consuming badge"],500);
        }
    }
}
