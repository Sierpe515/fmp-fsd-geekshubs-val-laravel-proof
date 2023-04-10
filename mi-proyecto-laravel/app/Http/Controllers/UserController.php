<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getUsers(){
        $users = User::query()->get();
        return $users;
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
}
