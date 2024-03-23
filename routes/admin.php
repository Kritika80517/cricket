<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UsermanagementController;
use App\Http\Controllers\Admin\AdsCategoryController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ReportProblemController;
use App\Http\Controllers\Admin\MatchHighlightCategoryController;
use App\Http\Controllers\Admin\MatchHighlightController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\MatchTypeController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\MatchController;

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
            Route::get('/', [UsermanagementController::class, 'index'])->name("list");
            Route::get('/create', [UsermanagementController::class, 'create'])->name('create');
            Route::post('/store', [UsermanagementController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [UsermanagementController::class, 'edit'])->name('edit');
            Route::post('/update', [UsermanagementController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [UsermanagementController::class, 'destory'])->name('delete');
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

        // Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {
        //     Route::get('/', [ReportProblemController::class, 'index'])->name('/');
        //     Route::get('/delete/{id}', [ReportProblemController::class, 'destory'])->name('delete');
        // });

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

        Route::group(['prefix' => 'matchschedule', 'as' => 'matchschedule.'], function () {
            Route::group(['prefix' => 'matchtype', 'as' => 'matchtype.'], function () {
                Route::get('/', [MatchTypeController::class, 'index'])->name('list');
                Route::post('/store', [MatchTypeController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [MatchTypeController::class, 'edit'])->name('edit');
                Route::post('/update', [MatchTypeController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [MatchTypeController::class, 'destory'])->name('delete');
                
            });

            Route::group(['prefix' => 'teams', 'as' => 'teams.'], function () {
                Route::get('/', [TeamController::class, 'index'])->name('list');
                Route::get('/create', [TeamController::class, 'create'])->name('create');
                Route::post('/store', [TeamController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('edit');
                Route::post('/update', [TeamController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [TeamController::class, 'destory'])->name('delete');
                
            });

            Route::group(['prefix' => 'players', 'as' => 'players.'], function () {
                Route::get('/', [PlayerController::class, 'index'])->name('list');
                Route::get('/create', [PlayerController::class, 'create'])->name('create');
                Route::post('/store', [PlayerController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [PlayerController::class, 'edit'])->name('edit');
                Route::post('/update', [PlayerController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [PlayerController::class, 'destory'])->name('delete');
            });
                
            Route::get('/', [MatchController::class, 'index'])->name('list');
            Route::get('/create', [MatchController::class, 'create'])->name('create');
            Route::post('/store', [MatchController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [MatchController::class, 'edit'])->name('edit');
            Route::post('/update', [MatchController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [MatchController::class, 'destory'])->name('delete');
        });
    
        Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
            Route::get('/', [NotificationController::class, 'index'])->name('list');
            Route::get('/create', [NotificationController::class, 'create'])->name('create');
            Route::post('/store', [NotificationController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [NotificationController::class, 'edit'])->name('edit');
            Route::post('/update', [NotificationController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [NotificationController::class, 'destory'])->name('delete');
        });

        // Staff Roles
        Route::resource('roles', RoleController::class);
        Route::controller(RoleController::class)->group(function () {
            Route::get('/roles/edit/{id}', 'edit')->name('roles.edit');
            Route::get('/roles/destroy/{id}', 'destroy')->name('roles.destroy');

            // Add Permissiom
            Route::post('/roles/add_permission', 'add_permission')->name('roles.permission');
        });
    
        // Staff
        Route::resource('staffs', StaffController::class);
        Route::get('/staffs/destroy/{id}', [StaffController::class, 'destroy'])->name('staffs.destroy');
        
        // Reports
        Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {
            Route::get('/', [ReportController::class, 'index'])->name('index');
            Route::get('/{id}', [ReportController::class, 'show'])->name('show');
            Route::post('reply', [ReportController::class, 'reply'])->name('reply');
            Route::get('/delete/{id}', [ReportController::class, 'delete'])->name('delete');
        });
    });
});
