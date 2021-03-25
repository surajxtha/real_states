<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');
Route::get('/create', function () {
    return view('cms.user.create');
});


Route::resource('/properties', 'PropertyController');
