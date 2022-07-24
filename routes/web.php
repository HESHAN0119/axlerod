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
    Route::resource('/comment', CommentController::class);
    Route::get('/find/garage', [GarageProfileController::class, 'find_garage'])->name('find_garage');
    Route::post('/set/current/garage', [GarageProfileController::class, 'set_current_location'])->name('set_current_location');
});

Route::middleware(['web', 'auth', 'check_if_garage'])->group(function () {
    Route::resource('/garage/profile', GarageProfileController::class);
});

Route::middleware(['web'])->group(function () {
    Route::resource('/post', PostController::class);
    Route::group(['middleware' => ['auth']], function() {
        Route::resource('/post', PostController::class, ['only' => ['store']]);
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/post/filter', [PostController::class, 'filter_posts'])->name('filter_posts');
    Route::get('/cusomer/view/{garage}', [GarageProfileController::class, 'garge_customer_view'])->name('garge_customer_view');
    Route::get('autocomplete/garage/name', [GarageProfileController::class, 'autocomplete_garage_name'])->name('autocomplete_garage_name');
});