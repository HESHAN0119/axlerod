<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\GarageProfileController;
use App\Http\Controllers\PostController;
use App\Models\GarageProfile;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/post', PostController::class);
    Route::resource('/comment', CommentController::class);
    Route::resource('/garage/profile', GarageProfileController::class);
});
