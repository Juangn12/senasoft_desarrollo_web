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


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function (){
        return view('profile');
    })->name('profile')->middleware('password.confirm');

    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('/cards', 'App\Http\Controllers\CardController')
        ->names('cards');

    Route::resource('/games','App\Http\Controllers\Game\GameController')->names('games');
});

require __DIR__.'/auth.php';

