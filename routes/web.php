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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("home",'App\Http\Controllers\StudentController@index');
Route::get("home/create",'App\Http\Controllers\StudentController@create');
Route::post("home",'App\Http\Controllers\StudentController@store');
Route::get("home/{details}",'App\Http\Controllers\StudentController@show');
Route::get('home/{details}/edit','App\Http\Controllers\StudentController@edit');
Route::delete('home/{delete}',"App\Http\Controllers\StudentController@destroy");
Route::put("/home/{update}","App\Http\Controllers\StudentController@update");
