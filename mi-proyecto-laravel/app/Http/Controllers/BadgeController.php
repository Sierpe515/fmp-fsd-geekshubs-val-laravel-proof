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

    public function addBadgeToGame(Request $request){
        try {
            Log::info("Adding badge to game");

            // AUTOMATIZAR CAMPOS
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

    // public function consumeBadge($id){
    //     try {
    //         GameBadge::destroy($id);

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Badge consumed'
    //         ],200);
    //     } catch (\Throwable $th){
    //         return response()->json([ 
    //             'success' => false,
    //             'message' => $th->getMessage()],500);
    //     }  
    // }

    public function consumeBadge(Request $request){
        try {
            Log::info("Consuming badge to game");

            // VALIDACION PARA COMPROBAR SI EL CHARACTER PERTENECE AL USER
            // AUTOMATIZAR CAMPOS
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
