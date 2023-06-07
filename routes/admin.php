<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::controller(AuthController::class)->group(function(){
            Route::get('login', 'index')->name('loginForm');
            Route::post('login', 'login')->name('login');
        });
    });

    Route::middleware('admin')->group(function(){
        Route::controller(AuthController::class)->group(function(){
            Route::post('logout', 'logout')->name('logout');
        });

        Route::controller(TagController::class)->group(function(){
            Route::post('storeTag', 'store')->name('storeTag');
            Route::get('editTag/{id}', 'edit')->name('editTag');
            Route::post('UpdateTag/{id}', 'update')->name('updateTag');
        });

        Route::controller(PostController::class)->group(function(){
            Route::post('/addPost', 'store')->name('addPost');
            Route::get('/createPost', 'create')->name('createPost');
            Route::get('/editPost/{id}', 'edit')->name('editPost');
            Route::post('/deletePost/{id}', 'destroy')->name('deletePost');
            Route::get('/show_adminPosts', 'show_adminPosts')->name('adminPosts');
        });

        Route::controller(AdminController::class)->group(function(){
            Route::get('/index', 'index')->name('index');
            Route::get('tags', 'view_tags')->name('tags');
            Route::get('posts', 'show_posts')->name('posts');
            Route::get('postsByTag/{tag_id}', 'show_posts_ByTag')->name('postsByTag');
            Route::get('post/{id}', 'show_post')->name('showPost');
        });



    });

});
