<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\AdsCategoryController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ReportProblemController;
use App\Http\Controllers\Admin\MatchHighlightCategoryController;
use App\Http\Controllers\Admin\MatchHighlightController;
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

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => 'authCheck'], function () {
        Route::get('login', [LoginController::class, 'loginShow'])->name('login.show');
        Route::post('admin-login', [LoginController::class, 'login'])->name('login');
    });
    Route::group(['middleware' => ['auth']], function(){

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('logout', [LoginController::class, 'logout'] )->name('logout');
        
        Route::get('profile', [UserController::class, 'profile'])->name('profile');
        Route::post('update-profile', [UserController::class, 'updateProfile'])->name('update.profile');
        Route::post('update-password', [UserController::class, 'updatePassword'])->name('update.password');
        Route::get('contact', [ContactController::class, 'contact'])->name('contact');
        
        Route::get('settings', [SettingController::class, 'index'])->name('settings');
        Route::post('settings-update', [SettingController::class, 'update'])->name('settings.update');

        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/', [UserManagementController::class, 'index'])->name("list");
            Route::get('/create', [UserManagementController::class, 'create'])->name('create');
            Route::post('/store', [UserManagementController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [UserManagementController::class, 'edit'])->name('edit');
            Route::post('/update', [UserManagementController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [UserManagementController::class, 'destory'])->name('delete');
        });

        Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
            Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
                Route::get('/', [ArticleCategoryController::class, 'index'])->name('list');
                Route::post('/store', [ArticleCategoryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [ArticleCategoryController::class, 'edit'])->name('edit');
                Route::post('/update', [ArticleCategoryController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [ArticleCategoryController::class, 'destory'])->name('delete');
    
                Route::group(['prefix' => 'subcategory', 'as' => 'subcategory.'], function () {
                    Route::get('/', [ArticleCategoryController::class, 'subIndex'])->name('list');
                    Route::post('/store', [ArticleCategoryController::class, 'subStore'])->name('store');
                    Route::get('/edit/{id}', [ArticleCategoryController::class, 'subEdit'])->name('edit');
                    Route::post('/update', [ArticleCategoryController::class, 'subUpdate'])->name('update');
                    Route::get('/delete/{id}', [ArticleCategoryController::class, 'subDestory'])->name('delete');
                });
            });
            Route::get('/', [ArticleController::class, 'index'])->name('list');
            Route::get('/create', [ArticleController::class, 'create'])->name('create');
            Route::post('/store', [ArticleController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('edit');
            Route::post('/update', [ArticleController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ArticleController::class, 'destory'])->name('delete');
        });

        Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {
            Route::get('/', [ReportProblemController::class, 'index'])->name('/');
            Route::get('/delete/{id}', [ReportProblemController::class, 'destory'])->name('delete');
        });

        Route::group(['prefix' => 'ads', 'as' => 'ads.'], function () {
            Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
                Route::get('/', [AdsCategoryController::class, 'index'])->name('list');
                Route::post('/store', [AdsCategoryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [AdsCategoryController::class, 'edit'])->name('edit');
                Route::post('/update', [AdsCategoryController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [AdsCategoryController::class, 'destory'])->name('delete');
                
                Route::group(['prefix' => 'subcategory', 'as' => 'subcategory.'], function () {
                    Route::get('/', [AdsCategoryController::class, 'subIndex'])->name('list');
                    Route::post('/store', [AdsCategoryController::class, 'subStore'])->name('store');
                    Route::get('/edit/{id}', [AdsCategoryController::class, 'subEdit'])->name('edit');
                    Route::post('/update', [AdsCategoryController::class, 'subUpdate'])->name('update');
                    Route::get('/delete/{id}', [AdsCategoryController::class, 'subDestory'])->name('delete');
                });
            });
            Route::get('/', [AdsController::class, 'index'])->name('list');
            Route::get('/create', [AdsController::class, 'create'])->name('create');
            Route::post('/store', [AdsController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdsController::class, 'edit'])->name('edit');
            Route::post('/update', [AdsController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AdsController::class, 'destory'])->name('delete');
        });
    
        Route::group(['prefix' => 'matchvideo', 'as' => 'matchvideo.'], function () {
            Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
                Route::get('/', [MatchHighlightCategoryController::class, 'index'])->name('list');
                Route::post('/store', [MatchHighlightCategoryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [MatchHighlightCategoryController::class, 'edit'])->name('edit');
                Route::post('/update', [MatchHighlightCategoryController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [MatchHighlightCategoryController::class, 'destory'])->name('delete');
                
                Route::group(['prefix' => 'subcategory', 'as' => 'subcategory.'], function () {
                    Route::get('/', [MatchHighlightCategoryController::class, 'subIndex'])->name('list');
                    Route::post('/store', [MatchHighlightCategoryController::class, 'subStore'])->name('store');
                    Route::get('/edit/{id}', [MatchHighlightCategoryController::class, 'subEdit'])->name('edit');
                    Route::post('/update', [MatchHighlightCategoryController::class, 'subUpdate'])->name('update');
                    Route::get('/delete/{id}', [MatchHighlightCategoryController::class, 'subDestory'])->name('delete');
                });
            });
            Route::get('/', [MatchHighlightController::class, 'index'])->name('list');
            Route::get('/create', [MatchHighlightController::class, 'create'])->name('create');
            Route::post('/store', [MatchHighlightController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [MatchHighlightController::class, 'edit'])->name('edit');
            Route::post('/update', [MatchHighlightController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [MatchHighlightController::class, 'destory'])->name('delete');
        });
    
        Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
            Route::get('/', function () {
                return view('admin/notifications/create');
            });
        });
        
    });
});