<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SelectGameController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// AUTH
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// USERS
Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/users/withCharacters', [UserController::class, 'getUserByIdWithCharacters']);
Route::put('/users', [UserController::class, 'updateUser']);
// AÑADIR MIDDLEWARE ISADMIN
// Route::group([
//     'middleware' => ['auth:sanctum','admin']
//     ], function () {
//         Route::get('/users/role', [UserController::class, 'getUsersRole']);
//         Route::delete('/users/{id}', [UserController::class, 'deleteUserByAdmin']);
// });
Route::middleware('admin')->get('/users/role', [UserController::class, 'getUsersRole']);
Route::put('/users/updateRole/{id}', [UserController::class, 'updateUserRoleByAdmin']);

// ROLES
Route::post('/newRole', [RoleController::class, 'createPrivilege']);
Route::get('/roles/{id}', [RoleController::class, 'getRolesByIdWithUsers']);

// CHARACTERS
Route::group([
    'middleware' => 'auth:sanctum'
    ], function () {
    Route::post('/characters/newCharacter', [CharacterController::class, 'createNewCharacters']);
});

// SELECTGAMES
Route::get('/selectGames/withSavedGames', [SelectGameController::class, 'getSelectGamesWithSavedGame']);
Route::get('/selectGames', [SelectGameController::class, 'getSelectGames']);

// GAMES
Route::get('/games/withSelectGames', [GameController::class, 'getGamesWithSelectGame']);
Route::get('/games', [GameController::class, 'getGames']);
Route::middleware('auth:sanctum')->post('/games', [GameController::class, 'createNewGame']);

// STAGES
Route::get('/stages', [StageController::class, 'getStages']);
Route::get('/stages/withAnswers', [StageController::class, 'getStagesWithAnswers']);

// ANSWERS
Route::get('/answers', [AnswerController::class, 'getAnswers']);
Route::get('/answers/withStage', [AnswerController::class, 'getAnswersWithStage']);

// BADGES
Route::get('/badges', [BadgeController::class, 'getBadges']);
Route::get('/badges/withAnswers', [BadgeController::class, 'getBadgesWithAnswers']);