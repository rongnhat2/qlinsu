<?php

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

Route::resource('department' , 'DepartmentController');
Route::resource('employee', 'EmployeeController');
Route::resource('bonus', 'BonusController');
Route::resource('discipline', 'DisciplineController');
Route::resource('users', 'UsersController');
Route::resource('salary', 'SalaryController');
Route::resource('timekeeping', 'TimekeepingController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

