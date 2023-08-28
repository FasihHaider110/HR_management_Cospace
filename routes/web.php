<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', 'App\Http\Controllers\EmployeeController@index')->name('index');
Route::get('/loginvalidate', 'App\Http\Controllers\EmployeeController@login_validate')->name('login.valid');
Route::get('/register', 'App\Http\Controllers\EmployeeController@register_user')->name('register.user');
Route::post('/add', 'App\Http\Controllers\EmployeeController@add_user')->name('user.add');