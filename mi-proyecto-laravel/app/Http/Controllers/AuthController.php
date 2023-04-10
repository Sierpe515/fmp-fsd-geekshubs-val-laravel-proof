<?php

namespace App\Http\Controllers;

use App\Mail\mailExample;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            // ToDo TryCatch
            $request->validate([
                'userName' => 'required|string|unique:users,userName|max:20',
                'email' => 'required|string|unique:users,email|max:40',
                'password' => 'required|string|min:6|max:12',
            ]);

            $user = User::create([
                // 'role_id' => $request[2],
                'userName' => $request['userName'],
                'email' => $request['email'],
                // 'role_id' => self::ROLE_USER,
                'password' => bcrypt($request['password'])
            ]);

            $token = $user->createToken('apiToken')->plainTextToken;

            $res = [
                "success" => true,
                "message" => "User registered successfully",
                'data' => $user,
                "token" => $token
            ];

            // Mail::to($user->email)->send(new mailExample($request['name']));

            return response()->json($res, Response::HTTP_CREATED);
        } catch (\Throwable $th){
        Log::error('REGISTERING USER: '.$th->getMessage());
        return response()->json([ 
            'success' => false,
            'message' => "Error registering user"],500);
        }
        
    }

    public function login(Request $request)
    {
        try {
            // ToDo TryCatch
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::query()->where('email', $request['email'])->first();
            // Validamos si el usuario existe
            if (!$user) {
                return response([
                    "success" => false, 
                    "message" => "Email or password are invalid",
                ], Response::HTTP_NOT_FOUND);
            }
            // Validamos la contraseña
            if (!Hash::check($request['password'], $user->password)) {
                return response(["success" => true, "message" => "Email or password are invalid"], Response::HTTP_NOT_FOUND);
            }
        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            "success" => true, 
            "message" => "User logged successfully", 
            "token" => $token];

        return response()->json($res, Response::HTTP_ACCEPTED);
        } catch (\Throwable $th){
            Log::error('LOGING USER: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error loging user"],500);
        }
        
    }

    public function logout(Request $request)
    {
        try {
            $accessToken = $request->bearerToken();

            // Get access token from database
            $token = PersonalAccessToken::findToken($accessToken);

            // Revoke token
            $token->delete();

            return response(
                [
                    "success" => true,
                    "message" => "Logout successfully"
                ],
                Response::HTTP_OK
            );
        } catch (\Throwable $th){
            Log::error('LOGOUT USER: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error logout user"],500);
        }
        
    }
}
