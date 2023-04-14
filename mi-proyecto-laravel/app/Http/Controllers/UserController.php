<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function getUsers(){
        // $users = User::query()->get();
        $users = User::with('role')->get();
        // $users = User::whereHas('roles')->get();
        // $users->roles;
        return $users;
    }

    public function getProfile(){

        $users = User::find(auth()->user()->id);

        return $users;
    }

    public function getUsersWithCharacters(){
        try {
            $userByIdWithCharacters = User::with(['characters'])->get();

            return [
                'success' => true,
                'data' => $userByIdWithCharacters
            ];
        } catch (\Throwable $th){
            return response()->json([ 
                'success' => false,
                'message' => $th->getMessage()],500);
        } 
    }

    public function getUserByIdWithCharacters(){
        try {
            $userByIdWithCharacters = User::with(['characters'])->find(auth()->user()->id);

            return [
                'success' => true,
                'data' => $userByIdWithCharacters
            ];
        } catch (\Throwable $th){
            return response()->json([ 
                'success' => false,
                'message' => $th->getMessage()],500);
        } 
    }


    public function updateProfile(Request $request){
        try {
            $user = User::find(auth()->user()->id);

            // ToDo TryCatch
            $validator = Validator::make($request->all(),[
                'userName' => 'required|string|unique:users,userName|regex:/^[a-zA-Z0-9 ]*$/|max:20',
                'name' => 'string|regex:/^[a-zA-Z0-9 ]*$/|max:20',
                'surname' => 'string|regex:/^[a-zA-Z0-9 ]*$/|max:20',
                'email' => 'required|string|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|max:40',
                //Añadir unique a email y a userName
                'password' => ['required', Password::min(6)->mixedCase()->letters()->numbers(),],
                'birthdate' => 'date',
            ]);

            if ($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            if(!$user) {
                return response()->json([
                    'success' => true,
                    'message' => 'User does not exist',
                ],404);
                
            }

            $userName = $request->input('userName');
            $name = $request->input('name');
            $surname = $request->input('surname');
            $email = $request->input('email');
            $password = bcrypt($request->input('password'));
            $birthdate = $request->input('birthdate');

            $user->userName = $request->input('userName');
            $user->name = $request->input('name');
            $user->surname = $request->input('surname');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->birthdate = $request->input('birthdate');

            $user->save();

            $res = [
                "success" => true,
                "message" => "User updated successfully",
                'data' => $user
            ];

            return response()->json($res, Response::HTTP_CREATED);
        } catch (\Throwable $th){
        Log::error('UPDATING USER: '.$th->getMessage());
        return response()->json([ 
            'success' => false,
            'message' => "Error updating user"],500);
        }
    }

    public function deleteUserByAdmin($id){
        try {
            User::destroy($id);

            return response()->json([
                'success' => true,
                'message' => 'User deleted'
            ],200);
        } catch (\Throwable $th){
            return response()->json([ 
                'success' => false,
                'message' => $th->getMessage()],500);
        }  
    }

    public function updateUserRoleByAdmin(Request $request, $id){
        try {
            $user = User::find($id);

            if(!$user) {
                return response()->json([
                    'success' => true,
                    'message' => 'User does not exist',
                ],404);                
            }

            $role_id = $request->input('role_id');

            if(isset($role_id)){
                $user->role_id =$request->input('role_id');
            }

            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'Role updated',
                'data' => $user],200);
        } catch (\Throwable $th){
            return response()->json([ 
                'success' => false,
                'message' => $th->getMessage()],500);
        } 
    }
}
