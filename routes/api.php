<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//new importations below
use App\Models\Post;
use App\http\Controllers\PostsApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!

//api link is below
http://localhost/eatraderapi/public/api/posts
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostsApiController::class, 'index']);

Route::post('/posts',[PostsApiController::class, 'store']);

Route::put('/posts/{post}', [PostsApiController::class, 'update']);

Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);