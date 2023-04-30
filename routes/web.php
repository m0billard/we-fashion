<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ProductsController@index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductsController@show')->name('products.show');
Route::get('/admin', 'App\Http\Controllers\ProductsController@admin')->name('products.admin');
Route::get('/admin/{id}/edit', 'App\Http\Controllers\ProductsController@edit')->name('products.edit');
Route::put('/products/{id}', 'App\Http\Controllers\ProductsController@update')->name('products.update');
Route::get('/admin/edit', 'App\Http\Controllers\ProductsController@create')->name('products.create');
Route::post('/products', 'App\Http\Controllers\ProductsController@store')->name('products.store');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductsController@destroy')->name('products.destroy');
