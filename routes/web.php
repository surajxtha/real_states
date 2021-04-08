<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/properties', 'Site\PropertyController@index')->name('site.properties.index');
Route::get('/properties/create', 'Site\PropertyController@create')->name('site.properties.create');
Route::post('/properties/store', 'Site\PropertyController@store')->name('site.properties.store');
Route::get('/properties/{slug}', 'Site\PropertyController@show')->name('site.properties.show');
Route::get('/properties/user/{property}/edit', 'Site\PropertyController@edit')->name('site.properties.edit');
Route::put('/properties/user/{property}/update', 'Site\PropertyController@update')->name('site.properties.update');
Route::get('/properties/user/list', 'Site\PropertyController@display')->name('site.properties.list');
Route::get('/properties/{property}/delete','Site\PropertyController@delete')->name('site.properties.delete');

Route::get('/search', 'SearchController@index')->name('search');

require __DIR__ . '/admin.php';
Auth::routes();
Route::get('/register', 'UserAuthController@register')->name('register');
Route::get('/login', 'UserAuthController@login')->name('login');
Route::get('/forgetPassword', 'UserAuthController@forget')->name('user-reset');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
