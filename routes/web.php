<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    CategoryController,
    UserController,
    AuthController
};


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('checkAuth')->group(function(){   });
    # post
    Route::get('/posts',[PostController::class,'index']);
    Route::get('/posts/create',[PostController::class,'create']);
    Route::post('/posts',[PostController::class,'store']);
    Route::get('/posts/{id}/edit',[PostController::class,'edit']);
    Route::post('/posts/{id}',[PostController::class,'update']);
    Route::post('/posts/{id}/delete',[PostController::class,'destory']);
    // post with comments
    Route::get('/posts/{id}/comments',[PostController::class,'postCommentIndex']);
    Route::post('/posts/comments/{commentId}/deny',[PostController::class,'denyComment']);

    # category
    Route::resource('/categories',CategoryController::class);
    # user
    Route::resource('/users',UserController::class);



# authentication
Route::get('/login',[AuthController::class, 'loginForm']);
Route::post('/login',[AuthController::class, 'login']);


