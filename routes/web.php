<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Welcome
Route::get('/', [UserController::class, 'welcome']);

//Home 
Route::get('/home', [UserController::class, 'home']);

//createUser
Route::get('/addUser', [UserController::class, 'create']);
Route::post('/addUser', [UserController::class, 'addUser'])->name('addUser');

//Group
Route::prefix('user')->group(function(){
    Route::get('{id}/{name}', [UserController::class, 'userInput'])->name('userDisplay');
    Route::get('/edit/{id}/{name}', [UserController::class, 'edit']);
    Route::get('/delete', [UserController::class, 'index']);
    Route::get('{id}', [UserController::class, 'show']);
});

//AboutController
Route::get('about/{param1?}/{param2?}', [AboutController::class, 'index']);

//CalculateController
Route::get('calculate/{num1}/{num2}', [CalculateController::class, 'index']);

//PostController
Route::group(['prefix' => 'addPost'], function(){
    Route::get('/', [PostController::class, 'index'])->name('posts.create');
    Route::post('/', [PostController::class, 'store'])->name('posts.store');

    Route::get('edit/{id}', [PostController::class, 'editForm'])->name('posts.edit-form');
    Route::post('edit/{id}', [PostController::class, 'editSubmit'])->name('posts.edit-submit');

    Route::delete('/delete/{id}', [PostController::class, 'deletePost'])->name('posts.delete');
});

//searchPost
Route::get('search/{param?}', [PostController::class, 'searchPost'])->name('searchPost');

//Fallback
Route::fallback([UserController::class, 'fallback']);
