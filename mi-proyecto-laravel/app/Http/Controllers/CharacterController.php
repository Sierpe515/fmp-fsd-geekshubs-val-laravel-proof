<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CharacterController extends Controller
{
    public function createNewCharacters(Request $request){
        try {
            Log::info("Creating new character");

            $validator = Validator::make($request->all(), [
                'name' => 'required | regex:/^[a-zA-Z0-9 ]*$/',
                'gender' => 'required',
            ]);

            if ($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            $userId = auth()->user()->id;
            $name = $request->input('name');
            $gender = $request->input('gender');

            $newCharacter = new Character();
            $newCharacter->user_id = $userId;
            $newCharacter->name = $name;
            $newCharacter->gender = $gender;
            $newCharacter->save();

            return response()->json([
                'success' => true,
                'message' => 'New Character created',
                'data' => $newCharacter],200);
        } catch (\Throwable $th){
            Log::error('CREATING NEW CHARACTER: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error creating newCharacter"],500);
        }
    }
}
