<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/news', function () {
    return view('frontend.news');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::post('/contact/submit',[ContactController::class, 'store'])->name('contact.submit');
