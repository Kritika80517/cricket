<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MatchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register/submit', [UserController::class, 'registerSubmit'])->name('register.submit');
Route::post('/login/submit', [UserController::class, 'login'])->name('login.submit');
Route::get('/forgot/password', [UserController::class, 'forgotPasswordForm'])->name('forgot.password');
Route::post('/submit/forget-password', [UserController::class, 'submitForgetPasswordForm'])->name('submit.forget.password'); 
Route::get('/reset-password/{token}', [UserController::class, 'resetPasswordForm'])->name('reset.password');
Route::post('/submit/reset-password', [UserController::class, 'submitResetPasswordForm'])->name('submit.reset.password');

Route::get('/about', function () {
    return view('frontend.about');
});

// Teams
Route::group(['prefix' => 'teams', 'as' => 'teams.'], function () {
    Route::get('/', [TeamController::class, 'index']);
    Route::get('/info', [TeamController::class, 'show']);
    Route::get('/{team_id}/info', [TeamController::class, 'show']);
    Route::get('/list/{type}',  [TeamController::class, 'teams']);
    Route::get('/schedules',  [TeamController::class, 'getSchedules']);
    Route::get('/results',  [TeamController::class, 'getResults']);
    Route::get('/news',  [TeamController::class, 'getNews']);
    Route::get('/players',  [TeamController::class, 'getPlayers']);
    Route::get('/stats/filters',  [TeamController::class, 'getStateFilter']);
    Route::get('/stats',  [TeamController::class, 'getStats']);
});

// News
Route::group(['prefix' => 'news' , 'as' => 'news.'], function(){
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/info',  [NewsController::class, 'news']);
    Route::get('/categories',  [NewsController::class, 'categories']);
    Route::get('/details/{newsId}',  [NewsController::class, 'newsDetails']);
    // Route::get('/info',  [NewsController::class, 'show']);
});


// matches
Route::group(['prefix' => 'matches' , 'as' => 'matches.'], function(){
    Route::get('/', [MatchController::class, 'index']);
});






// Route::get('/article', function () {
//     return view('frontend.article');
// });
Route::get('/articles',[ArticleController::class, 'index']);

Route::get('/players/info', function () {
    return view('frontend.players.details');
});


// Route::get('/contact', function () {
//     return view('frontend.contact');
// });

Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/contact/submit',[ContactController::class, 'store'])->name('contact.submit');
