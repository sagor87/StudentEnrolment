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


//Admin Routes-----------------------------------------------------------------------------
Route::get('/backend', 'AdminPagesController@login')->name('admin.login');
Route::post('/backend/index', 'AdminController@index')->name('admin.login.home');
Route::get('/backend/logout', 'AdminController@destroy')->name('admin.logout');
Route::get('/backend/index', 'AdminPagesController@index')->name('admin.index');


Route::get('/backend/addstudent', 'StudentController@index')->name('add.student');
Route::post('/backend/addstudent', 'StudentController@store')->name('store.student');
Route::get('/backend/allstudent', 'StudentController@allstudent')->name('all.student');

