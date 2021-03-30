<?php

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

/**
 * Property Routes
 */
Route::get('/properties', 'PropertyController@index')->name('properties.index');
Route::get('/properties/create', 'PropertyController@create')->name('properties.create');
Route::post('/properties', 'PropertyController@store')->name('properties.store');
Route::get('/properties/{property}/edit', 'PropertyController@edit')->name('properties.edit');
Route::post('/properties/{property}/update', 'PropertyController@update')->name('properties.update');
Route::get('/properties/{property}/delete','PropertyController@delete')->name('properties.delete');

/**
 * Property Image Routes
 */
Route::get('/properties/images/{id}/delete', 'PropertyController@deleteImage')->name('properties.image.delete');
Route::post('/properties/images/store', 'PropertyController@storeImages')->name('properties.image.store');
