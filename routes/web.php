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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');




Route::get('/adminhome', 'AdminController@index')->name('adminhome.index');
Route::get('/adminhome/addemployee', 'AdminController@addemp')->name('adminhome.addemployee');



Route::get('/home', 'EmployeeController@index')->name('member.index');


Route::get('/logout', 'LogoutController@index')->name('logout.index');