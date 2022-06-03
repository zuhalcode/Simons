<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PersonalityQuestionController;

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

Route::get('/', fn() => view('home'));
Route::get('/dashboard', fn() => view('dashboard.index'))->middleware('auth');

Route::resource('/quest', QuestionController::class)->middleware('auth');
Route::resource('/personality', PersonalityQuestionController::class)->middleware('auth');


Route::controller(UserController::class)->group(fn() => [
    Route::get('/login', 'index')->middleware('guest')->name('login'),
    Route::post('/login', 'login'),
    Route::get('/register', 'register')->middleware('guest'),
    Route::post('/register', 'store'),
    Route::post('/logout', 'logout'),
]);
