<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'HomeController@index')->name('home');


Route::get('/properties/index', 'Site\PropertyController@index')->name('site.properties.index');
Route::get('/properties/create', 'Site\PropertyController@create')->name('site.properties.create');
Route::get('/properties/{slug}', 'Site\PropertyController@show')->name('site.properties.show');

Route::get('/search', 'SearchController@index')->name('search');

require __DIR__ . '/admin.php';

Auth::routes();

Route::get('properties/register', 'UserAuthController@register')->name('user-register');
Route::get('properties/login', 'UserAuthController@login')->name('user-login');
Route::get('properties/forgetPassword', 'UserAuthController@forget')->name('user-reset');
Route::get('properties/logout', 'Auth\LoginController@logout')->name('logout');
