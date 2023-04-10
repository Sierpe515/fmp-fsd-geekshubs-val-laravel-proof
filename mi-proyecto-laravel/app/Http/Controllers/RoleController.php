<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function createPrivilege(Request $request){
        try {

            Log::info("Create Role");

            $validator = Validator::make($request->all(), [
                'privilege' => 'required | regex:/^[a-zA-Z0-9 ]*$/ | unique:roles,privilege',
            ]);

            if ($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            $newPrivilege = $request->input('privilege');

            $newRole = new Role();
            $newRole->privilege = $newPrivilege;
            $newRole->save();

            return response()->json([
                'success' => true,
                'message' => 'New Role created',
                'data' => $newPrivilege],200);
        } catch (\Throwable $th){
            Log::error('CREATING NEW ROLE: '.$th->getMessage());
            return response()->json([ 
                'success' => false,
                'message' => "Error creating new role"],500);
        }
    }
}
