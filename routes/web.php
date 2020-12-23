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
Route::post('/adminhome/addemployee', 'AdminController@store');
Route::get('/adminhome/list', 'AdminController@emplist')->name('adminhome.emplist');
Route::get('/adminhome/list/info/{id}', 'AdminController@employeeinfo')->name('adminhome.empinfo');
Route::get('/adminhome/list/info/edit/{id}', 'AdminController@employeeedit')->name('employee.edit');
Route::post('/adminhome/list/info/edit/{id}', 'AdminController@employeeupdate');
Route::get('/adminhome/list/info/delete/{id}', 'AdminController@employeedelete')->name('employee.delete');
Route::post('/adminhome/list', 'AdminController@fetch')->name('employee.search');



Route::get('/home', 'EmployeeController@index')->name('employee.index');
Route::get('/home/addjob', 'EmployeeController@addjob')->name('adminhome.addjob');
Route::post('/home/addjob', 'EmployeeController@store');
Route::get('/home/list', 'EmployeeController@joblist')->name('adminhome.joblist');
Route::get('/home/list/info/{id}', 'EmployeeController@jobinfo')->name('adminhome.jobinfo');
Route::get('/home/list/info/edit/{id}', 'EmployeeController@employeeedit')->name('job.edit');
Route::post('/home/list/info/edit/{id}', 'EmployeeController@employeeupdate');
Route::get('/home/list/info/delete/{id}', 'EmployeeController@employeedelete')->name('job.delete');


Route::get('/logout', 'LogoutController@index')->name('logout.index');