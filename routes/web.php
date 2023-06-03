<?php

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

Route::get('/', function () {
    return view('home');
});

# Users
Route::get('/users/new', [App\Http\Controllers\UsersController::class, 'new']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'create']);

# Activities
Route::get('/indoor-sports', [App\Http\Controllers\ActivitiesController::class, 'indoor']);
Route::get('/outdoor-sports', [App\Http\Controllers\ActivitiesController::class, 'outdoor']);
Route::get('/recreation', [App\Http\Controllers\ActivitiesController::class, 'recreation']);
Route::post('/activities', [App\Http\Controllers\ActivitiesController::class, 'create']);

Route::get('/contact-us', [App\Http\Controllers\StaticPagesController::class, 'contact']);

# Gallery
Route::get('/gallery', [App\Http\Controllers\MediaController::class, 'index']);

# Feedback
Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'create']);
