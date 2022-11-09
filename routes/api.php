<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', [\App\Http\Controllers\Post\PostListController::class, 'list'])->name('post.list');
// Route::get('/post/create', [\App\Http\Controllers\Post\PostCreateController::class, 'create'])->name('post.create');
Route::post('/post/create', [\App\Http\Controllers\Post\PostStoreController::class, 'store'])->name('post.store');
Route::get('/post/edit/{post}', [\App\Http\Controllers\Post\PostEditController::class, 'edit'])->name('post.edit');
Route::post('/post/edit/{post}', [\App\Http\Controllers\Post\PostUpdateController::class, 'update'])->name('post.update');
Route::get('/post/delete/{post}', [\App\Http\Controllers\Post\PostDeleteController::class, 'destroy'])->name('post.delete');
