<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
        // $users = User::query()->get();
        $users = User::with('role')->get();
        // $users = User::whereHas('roles')->get();
        // $users->roles;
        return $users;
    }

    public function getUserByIdWithCharacters(){
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

    public function updateUser(){
        return "UpdateUser";
    }

    //AÑADIR MIDDLEWARE ISADMIN
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
