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

Route::group(['middleware' => ['LoginCheck']], function () {


Route::get('/backend/index', 'AdminPagesController@index')->name('admin.index');


Route::get('/backend/addstudent', 'StudentController@index')->name('add.student');
Route::post('/backend/addstudent', 'StudentController@store')->name('store.student');
Route::get('/backend/allstudent', 'StudentController@allstudent')->name('all.student');
Route::get('/backend/delete-student/{id}', 'StudentController@delete')->name('student_delete');
Route::get('/backend/view-student/{id}', 'StudentController@show')->name('student_view');
Route::get('/backend/edit-student/{id}', 'StudentController@edit')->name('student_edit');
Route::post('/backend/update-student/{id}', 'StudentController@update')->name('student_update');
Route::post('/backend/update-student-Image/{id}', 'StudentController@image_update')->name('image_update');

Route::get('/backend/addteacher', 'TeacherController@index')->name('add.teacher');
Route::post('/backend/addteacher', 'TeacherController@store')->name('store.teacher');
Route::get('/backend/allteacher', 'TeacherController@allteacher')->name('all.teacher');

Route::get('/backend/cse', 'CourseController@cse')->name('cse');
Route::get('/backend/eee', 'CourseController@eee')->name('eee');
Route::get('/backend/ete', 'CourseController@ete')->name('ete');
Route::get('/backend/ce', 'CourseController@ce')->name('ce');



});

