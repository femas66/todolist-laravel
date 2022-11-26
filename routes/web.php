<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
