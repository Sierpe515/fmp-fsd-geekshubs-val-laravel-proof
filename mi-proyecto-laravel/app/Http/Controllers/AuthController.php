<?php

namespace App\Http\Controllers;

use App\Mail\mailExample;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            // ToDo TryCatch
            $request->validate([
                'userName' => 'required|string|unique:users,userName|regex:/^[a-zA-Z0-9 ]*$/|max:20',
                'email' => 'required|string|unique:users,email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|max:40',
                'password' => ['required', Password::min(6)->mixedCase()->letters()->numbers(),]
            ]);

            $user = User::create([
                'userName' => $request['userName'],
                'email' => $request['email'],
                'password' => bcrypt($request['password'])
            ]);

            $token = $user->createToken('apiToken')->plainTextToken;

            $res = [
                "success" => true,
                "message" => "User registered successfully",
                'data' => $user,
                "token" => $token
            ];

            Mail::to($user->email)->send(new mailExample($request['userName']));

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
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::with('role')->where('email', $request['email'])->first();
            if (!$user) {
                return response([
                    "success" => false, 
                    "message" => "Email or password are invalid",
                ], Response::HTTP_NOT_FOUND);
            }
            if (!Hash::check($request['password'], $user->password)) {
                return response(["success" => true, "message" => "Email or password are invalid"], Response::HTTP_NOT_FOUND);
            }
        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            "success" => true, 
            "message" => "User logged successfully",
            "user" => $user, 
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
