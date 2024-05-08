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
    
    Route::get('auth/facebook',[AuthController::class, 'redirectToFacebook'])->name('auth.facebook');
    Route::get('auth/facebook/callback',[AuthController::class, 'handleFacebookCallback']);

    Route::get('auth/google',[AuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('auth/google/callback',[AuthController::class, 'handleGoogleCallback']);

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

        Route::get('matches', [CricketController::class, 'matches_list']);
        Route::get('matches/info', [CricketController::class, 'matches_info']);
        Route::get('matches/team', [CricketController::class, 'matches_team']);
        Route::get('matches/commentaries', [CricketController::class, 'matches_commentaries']);
        Route::get('matches/commentaries/v2', [CricketController::class, 'matches_commentaries_v2']);
        Route::get('matches/overs', [CricketController::class, 'matches_overs']);
        Route::get('matches/scard', [CricketController::class, 'matches_scorecard']);
        Route::get('matches/scard/v2', [CricketController::class, 'matches_scorecard_v2']);
        Route::get('matches/leanback', [CricketController::class, 'matches_leanback']);

        Route::get('schedules/list', [CricketController::class, 'matche_schedule']);

        Route::get('series', [CricketController::class, 'series_list']);
        Route::get('series/list-archives', [CricketController::class, 'series_list_archives']);
        Route::get('series/get-matches', [CricketController::class, 'series_matches']);
        Route::get('series/get-news', [CricketController::class, 'series_news']);
        Route::get('series/get-squads', [CricketController::class, 'series_squads']);
        Route::get('series/get-players', [CricketController::class, 'series_players']);
        Route::get('series/get-venues', [CricketController::class, 'series_venues']);
        Route::get('series/get-points-table', [CricketController::class, 'series_points_table']);
        Route::get('series/get-stats-filters', [CricketController::class, 'series_stats_filters']);
        Route::get('series/get-stats', [CricketController::class, 'series_stats']);

        Route::get('team', [CricketController::class, 'team_list']);
        Route::get('team/get-schedules', [CricketController::class, 'team_schedule']);
        Route::get('team/get-results', [CricketController::class, 'team_results']);
        Route::get('team/get-news', [CricketController::class, 'team_news']);
        Route::get('team/get-players', [CricketController::class, 'team_players']);
        Route::get('team/get-stats-filters', [CricketController::class, 'team_stats_filters']);
        Route::get('team/get-stats', [CricketController::class, 'team_stats']);

        Route::get('venues/get-info', [CricketController::class, 'venues_list']);
        Route::get('venues/get-stats', [CricketController::class, 'venues_stats']);
        Route::get('venues/get-matches', [CricketController::class, 'venues_matches']);


        Route::get('players', [CricketController::class, 'players_list']);
        Route::get('players/search', [CricketController::class, 'search_players']);
        Route::get('players/info', [CricketController::class, 'players_info']);
        Route::get('current-matches', [CricketController::class, 'current_matches']);
    });
});
