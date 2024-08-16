<?php

use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
#    return view('welcome');
#});

Route::view('/','home')->name('home');
Route::view('/servicios','servicios')->name('servicios');
Route::view('/proyectos','proyectos')->name('proyectos');
Route::resource('clientes', App\Http\Controllers\ClientesController::class);
Route::view('/blog','blog')->name('blog');
Route::view('/contacto','contacto')->name('contacto');