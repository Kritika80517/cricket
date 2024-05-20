<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
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

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/news', function () {
    return view('frontend.news');
});

Route::get('/article', function () {
    return view('frontend.article');
});
Route::get('/article',[ArticleController::class, 'index']);

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::post('/contact/submit',[ContactController::class, 'store'])->name('contact.submit');
