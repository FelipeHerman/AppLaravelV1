<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::view('/contacto', 'contact')->name('contact');
Route::post('/contact', 'messageController@store')->name('message.store');

Route::resource('portafolio', 'projectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

Auth::routes(['register' => false]); //impide el registro de cualquier usuario