<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\ReportController;
use App\Http\Controllers\API\V1\MatchVideoController;
use App\Http\Controllers\API\V1\CricketController;
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


// routes/api.php

Route::prefix('v1')->group(function () {
    // Authentication
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

    // Authenticated users
    Route::middleware('auth:sanctum')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('info', [AuthController::class, 'user_details']);
            Route::get('logout', [AuthController::class, 'logout']);
        });
        // Reports
        Route::prefix('reports')->group(function () {
            Route::get('/', [ReportController::class, 'index']);
            Route::get('/{id}', [ReportController::class, 'show']);
            Route::post('/submit', [ReportController::class, 'store']);
            Route::post('/update/{id}', [ReportController::class, 'update']);
            Route::post('/delete/{id}', [ReportController::class, 'delete']);
        });

        Route::get('video', [MatchVideoController::class, 'index']);
        Route::get('related/video', [MatchVideoController::class, 'suggestionVideo']);

        // Cricket API
        Route::get('players', [CricketController::class, 'get_players']);
    });
});
