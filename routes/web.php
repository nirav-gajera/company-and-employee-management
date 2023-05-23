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


//auth
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//company
Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/create', 'CompanyController@create')->name('companies.create');
Route::post('/companies', 'CompanyController@store')->name('companies.store');
Route::get('/companies/{company}', 'CompanyController@show')->name('companies.show');
Route::get('/companies/{company}/edit', 'CompanyController@edit')->name('companies.edit');
Route::post('/companies/update', 'CompanyController@update')->name('companies.update');
Route::get('/companies/{company}/destroy', 'CompanyController@destroy')->name('companies.destroy');
Route::get('/companies/search', 'CompanyController@search')->name('companies.search');


//employee
Route::get('/employees', 'EmployeeController@index')->name('employees.index'); 
Route::get('/employees/create', 'EmployeeController@create')->name('employees.create');
Route::post('/employees', 'EmployeeController@store')->name('employees.store');
Route::get('/employees/{employee}', 'EmployeeController@show')->name('employees.show');
Route::get('/employees/{employee}/edit', 'EmployeeController@edit')->name('employees.edit');
Route::post('/employees/{employee}/update', 'EmployeeController@update')->name('employees.update');
Route::get('/employees/{employee}/destroy', 'EmployeeController@destroy')->name('employees.destroy');



Route::get('/', function () {
    return view('welcome');
});
