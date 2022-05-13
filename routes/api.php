<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CongregationController;
use App\Http\Controllers\ConfigurationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// unauthenticate routes
Route::get('/congregations/list', [CongregationController::class, 'list'])->middleware('api');

Route::middleware('api')->prefix('auth')->group( function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::middleware('auth')->group(function () {
        Route::get('/user-profile', [AuthController::class, 'userProfile']);
    });
});


Route::middleware('auth:api')->group(function($router) {
    Route::resource('/congregations', CongregationController::class)
    ->only([
        'index', 'show'
    ]);
    Route::resource('/configurations', ConfigurationController::class);
    // ->only([
    //     'index', 'show'
    // ]);
});
