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
Route::get('/admin', 'App\Http\Controllers\EmployeeController@login_admin')->name('login.admin');
Route::get('/loginvalidate', 'App\Http\Controllers\EmployeeController@login_validate')->name('login.valid');
Route::get('/register_form', 'App\Http\Controllers\EmployeeController@register_form')->name('register.form');
Route::get('/role_form', 'App\Http\Controllers\EmployeeController@role_form')->name('role.form');
Route::post('/add_user', 'App\Http\Controllers\EmployeeController@add_user')->name('user.add');
Route::post('/add_role', 'App\Http\Controllers\EmployeeController@add_role')->name('role.add');