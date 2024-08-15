<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::view('servicios', 'servicios')->name('servicios');
Route::get('clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes');
Route::get('clientes/crear', 'App\Http\Controllers\ClientesController@create')->name('clientes.create');
Route::get('clientes/{id}/editar', 'App\Http\Controllers\ClientesController@edit')->name('clientes.edit');

Route::patch('clientes/{id}', 'App\Http\Controllers\ClientesController@update')->name('clientes.update');

Route::post('clientes', 'App\Http\Controllers\ClientesController@store')->name('clientes.store');
Route::get('clientes/{id}', 'App\Http\Controllers\ClientesController@show')->name('clientes.show');
Route::delete('clientes/{cliente}', 'App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');
Route::view('proyectos', 'proyectos')->name('proyectos');
Route::view('contacto', 'contacto')->name('contacto');
Route::view('blog', 'blog')->name('blog');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');

