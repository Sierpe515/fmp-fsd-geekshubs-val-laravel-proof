<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MailExampleController;
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
Route::get('/users/withCharacters', [UserController::class, 'getUsersWithCharacters']);
Route::middleware('auth:sanctum')->get('/users/byIdwithCharacters', [UserController::class, 'getUserByIdWithCharacters']);
Route::put('/users', [UserController::class, 'updateUser']);
Route::middleware('auth:sanctum')->get('/users/profile', [UserController::class, 'getProfile']);
Route::middleware('auth:sanctum')->put('/users/updateProfile', [UserController::class, 'updateProfile']);
// AÑADIR MIDDLEWARE ISADMIN
Route::group([
    'middleware' => ['auth:sanctum','admin']
    ], function () {
        Route::delete('/users/{id}', [UserController::class, 'deleteUserByAdmin']);
        Route::put('/users/updateRole/{id}', [UserController::class, 'updateUserRoleByAdmin']);
});


// ROLES
Route::post('/newRole', [RoleController::class, 'createPrivilege']);
Route::get('/roles/{id}', [RoleController::class, 'getRolesByIdWithUsers']);

// CHARACTERS
Route::get('/characters/images', [CharacterController::class, 'getCharactersImages']);
Route::group([
    'middleware' => 'auth:sanctum'
], function () {
    Route::post('/characters/newCharacter', [CharacterController::class, 'createNewCharacters']);
    Route::put('/characters/newCharacter', [CharacterController::class, 'updateCharacterImage']);
    Route::get('/characters', [CharacterController::class, 'getCharactersWithUsersByUserId']);
});

// SELECTGAMES
Route::get('/selectGames/withSavedGames', [SelectGameController::class, 'getSelectGamesWithSavedGame']);
Route::get('/selectGames', [SelectGameController::class, 'getSelectGames']);

// GAMES
Route::get('/games/withSelectGames', [GameController::class, 'getGamesWithSelectGame']);
Route::get('/games/withGamesStages', [GameController::class, 'getGamesWithGameStage']);
Route::get('/games/withAllInfo', [GameController::class, 'getGamesWithAllInfo']);
Route::get('/games/byCharacter/{id}', [GameController::class, 'getGamesWithSelectGameByCharacter']);
Route::get('/games/byId/{id}', [GameController::class, 'getGamesWithSelectGameById']);
Route::get('/games', [GameController::class, 'getGames']);
Route::middleware('auth:sanctum')->post('/games', [GameController::class, 'createNewGame']);
Route::middleware('auth:sanctum')->put('/games/updateMadness', [GameController::class, 'updateMadnessGame']);
Route::middleware('auth:sanctum')->put('/games/updateFinished', [GameController::class, 'updateFinishedGame']);
Route::middleware('auth:sanctum')->put('/games/updateGuide', [GameController::class, 'updateGuideGame']);
Route::middleware('auth:sanctum')->post('/games/save', [GameController::class, 'createSavedGame']);
Route::middleware('auth:sanctum')->put('/games/update', [GameController::class, 'updateSavedGame']);
Route::group([
    'middleware' => ['auth:sanctum','admin']
], function () {
    Route::delete('/games/delete/{id}', [GameController::class, 'deleteSavedGameByAdmin']);
});

// STAGES
Route::get('/stages', [StageController::class, 'getStages']);
Route::get('/stages/withAnswers', [StageController::class, 'getStagesWithAnswers']);

// ANSWERS
Route::get('/answers', [AnswerController::class, 'getAnswers']);
Route::get('/answers/withStage', [AnswerController::class, 'getAnswersWithStage']);

// BADGES
Route::get('/badges', [BadgeController::class, 'getBadges']);
Route::get('/badges/withAnswers', [BadgeController::class, 'getBadgesWithAnswers']);
Route::get('/badges/ByGameId/{id}', [BadgeController::class, 'getBadgesByGameId']);
Route::post('/badges/add', [BadgeController::class, 'addBadgeToGame']);
Route::put('/badges/consume', [BadgeController::class, 'consumeBadge']);

// EMAILS
Route::get('/sendEmail', [MailExampleController::class, 'sendExampleEmail']);
