<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BackendController::class, 'showIndex'])->name('index');
Route::get('/post_list', [PostController::class, 'index'])->name('post_list');
Route::get('/create_post', [PostController::class, 'create_post'])->name('create_post');
Route::post('/post_store', [PostController::class, 'store'])->name('post_store');
Route::get('/post_info/{post_id}', [PostController::class, 'show'])->name('post_info');
Route::get('/edit_post/{post_id}', [PostController::class, 'edit'])->name('edit_post');
Route::post('/update_post/{post_id}', [PostController::class, 'update'])->name('update_post');
Route::get('/delete_post/{post_id}', [PostController::class, 'delete'])->name('delete_post');
