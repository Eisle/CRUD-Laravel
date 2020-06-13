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


// Login
Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

// Dashboard
Route::get('/home', 'HomeController@index')->name('home');

// Student
Route::get('/student', 'StudentController@index');
Route::post('/student/add', 'StudentController@add');
Route::get('/student/edit/{id}', 'StudentController@edit');
Route::post('/student/update/{id}', 'StudentController@update');
Route::get('/student/delete/{id}', 'StudentController@delete');

// Rayon
Route::get('/rayon', 'RayonController@rayon');
Route::post('/rayon/add', 'RayonController@add');
Route::get('/rayon/edit/{id}', 'RayonController@edit');
Route::post('/rayon/update/{id}', 'RayonController@update');
Route::get('/rayon/delete/{id}', 'RayonController@delete');

// Rombel
Route::get('/rombel', 'RombelController@rombel');
Route::post('/rombel/add', 'RombelController@add');
Route::get('/rombel/edit/{id}', 'RombelController@edit');
Route::post('/rombel/update/{id}', 'RombelController@update');
Route::get('/rombel/delete/{id}', 'RombelController@delete');