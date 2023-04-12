<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try{
            if (auth()->user()->role_id == 1)
            // if (Auth::user() &&  Auth::user()->role_id == 1)
   
            // $userId = User::find(auth()->user()->id);
            // $role = $userId->role_id;
            // if($role == 1)
            // dump(auth()->user());

            // if(auth()->user()->role_id == 1)

            // if (User::with('role')->find(auth()->user()->role_id) === 1)

            // if (User::with('role')->find(auth()->user()->role_id[1]))

            {
                return $next($request);
                // return dump(auth()->user()->role_id);
            }

            Log::info('Middleware isAdmin not permissions');
            return response()->json([
                'succes' => false,
                'message' => 'Not permissions',
                // dump(auth()->user())
            ]);
        } catch (\Throwable $th){
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                // dump(auth())
            ],500);
            }
    }
}
