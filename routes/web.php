<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/dashboard','App\Http\Controllers\StudentController@index')->name('dashboard');
Route::get('/edit/{id}','App\Http\Controllers\StudentController@edit');
Route::get('/show{id}','App\Http\Controllers\StudentController@show');
Route::get('/create','App\Http\Controllers\StudentController@create');
Route::post('/store','App\Http\Controllers\StudentController@store');
Route::post('/update/{id}','App\Http\Controllers\StudentController@update');
Route::get('/destroy/{id}','App\Http\Controllers\StudentController@destroy');
Route::get('/login-form',[UserController::class,'logIn'])->name('login.form');
Route::post('/login',[UserController::class,'loggedin'])->name('login');
Route::get('/signup',[UserController::class,'signup']);
Route::post('/signup/store',[UserController::class,'store'])->name('signup.store');