<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginController1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::group([], function () {
    Route::view('/', 'home.index')->name('home');
    Route::view('/home/Registration', 'home.Registration')->name('regi');
});

Route::group(['prefix' => 'admin'], function () {
    Route::view('/login', 'admin.login')->name('admin.login');
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/final', 'admin.final')->name('admin.final');
    Route::view('/summary', 'admin.summary')->name('admin.summary');
    Route::view('/index', 'admin.index')->name('admin.index');
    Route::view('/bootstrapsidebar', 'admin.bootstrapsidebar')->name('admin.bootstrapsidebar');
    Route::view('settings/config','admin.settings.config')->name('admin.settings.config');
    Route::view('settings/open-close','admin.settings.open-close')->name('admin.settings.open-close');
    Route::view('settings/set-topic','admin.settings.set-topic')->name('admin.settings.set-topic');

    Route::view('/sample', 'admin.layouts.sample')->name('admin.layouts.sample');

   
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
});


Route::prefix('author')->group(function () {
    
    Route::view('/register', 'author.register')->name('author.register');
    Route::post('/register', [LoginController::class, 'handleRegistration'])->name('author.register.submit');
    Route::get('/profile', [LoginController::class, 'showProfile'])->name('author.profile');

    Route::view('/register1', 'author.register1')->name('author.register1');
    Route::post('/register1', [LoginController::class, 'handleRegistration'])->name('author.register1.submit');
    Route::get('/profile', [LoginController::class, 'showProfile'])->name('author.profile');
});

