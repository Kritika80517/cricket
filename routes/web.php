<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\NewsController;
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
Route::post('/register', [UserController::class, 'register'])->name('register.submit');
Route::post('/login/submit', [UserController::class, 'login'])->name('login.submit');
Route::get('/forgot/password', [UserController::class, 'forgotPasswordForm'])->name('forgot.password');
Route::post('/submit/forget-password', [UserController::class, 'submitForgetPasswordForm'])->name('submit.forget.password'); 
Route::get('/reset-password/{token}', [UserController::class, 'resetPasswordForm'])->name('reset.password');
Route::post('/submit/reset-password', [UserController::class, 'submitResetPasswordForm'])->name('submit.reset.password');

Route::get('/about', function () {
    return view('frontend.about');
});

// Teams
Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/{team_id}', [TeamController::class, 'show']);
Route::get('/teams-info/{type}',  [TeamController::class, 'teams']);

// News
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news-info',  [NewsController::class, 'news']);
Route::get('/news-categories',  [NewsController::class, 'categories']);


Route::get('/article', function () {
    return view('frontend.article');
});
Route::get('/article',[ArticleController::class, 'index']);

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/series', function () {
    return view('frontend.series');
});

Route::post('/contact/submit',[ContactController::class, 'store'])->name('contact.submit');
