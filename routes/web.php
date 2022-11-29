<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/pw', function () {
    return Hash::make("femas");
});

Route::post('actiontambah', [HomeController::class, 'actiontambah'])->name('actiontambah');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/hapus/{id}', [HomeController::class, 'actionhapus']);
