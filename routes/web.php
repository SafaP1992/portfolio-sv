<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('dashbord');
Route::get('/post/{post}', [\App\Http\Controllers\PostViewController::class, 'show'])->name('post.show');

Route::group([ 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [\App\Http\Controllers\AdminMainController::class, 'index'])->name('dashbord');

    Route::get('/post', [\App\Http\Controllers\Post\PostListController::class, 'list'])->name('post.list');
    Route::get('/post/create', [\App\Http\Controllers\Post\PostCreateController::class, 'create'])->name('post.create');
    Route::post('/post/create', [\App\Http\Controllers\Post\PostStoreController::class, 'store'])->name('post.store');
    Route::get('/post/edit/{post}', [\App\Http\Controllers\Post\PostEditController::class, 'edit'])->name('post.edit');
    Route::post('/post/edit/{post}', [\App\Http\Controllers\Post\PostUpdateController::class, 'update'])->name('post.update');
    Route::get('/post/delete/{post}', [\App\Http\Controllers\Post\PostDeleteController::class, 'destroy'])->name('post.delete');

});

