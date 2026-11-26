<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Routes;





Route::view('/', 'landing.index')-> name('index');
Route::view('/about', 'landing.about')-> name('about');
Route::view('/contenido', 'landing.contenido')-> name('contenido');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');