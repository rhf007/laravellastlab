<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/students/create', '\App\Http\Controllers\StudentController@create')->name('students.create');
Route::post('/students/store', '\App\Http\Controllers\StudentController@store')->name('students.store');
Route::get('/students', '\App\Http\Controllers\StudentController@index')->name('students.index');
Route::get('/students/{student}/edit', '\App\Http\Controllers\StudentController@edit')->name('students.edit');
Route::put('/students/{student}', '\App\Http\Controllers\StudentController@update')->name('students.update');
Route::delete('/students/{student}', '\App\Http\Controllers\StudentController@destroy')->name('students.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
