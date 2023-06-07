<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavouriteController;


Route::controller(UserController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('posts', 'show_posts')->name('showPosts');
    Route::get('postsByTag/{tag_id}', 'show_posts_ByTag')->name('postsByTag');
    Route::get('post/{id}', 'show_post')->name('showPost');
});

Route::view('auth', 'auth')->name('auth');
Route::post('signUp',[AuthController::class,'register' ])->name('signUp');
Route::post('login',[AuthController::class,'login' ])->name('login');
Route::get('authform',[AuthController::class,'index' ])->name('authForm');

Route::middleware('auth')->group(function(){
    Route::post('logout',[AuthController::class,'logout' ])->name('logout');
    Route::controller(FavouriteController::class)->group(function(){
        Route::get('viewFav', 'index')->name('viewFav');
        Route::post('store/{post_id}', 'check')->name('storeFav');
    });
});




require __DIR__.'/admin.php';
