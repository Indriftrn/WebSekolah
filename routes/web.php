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

Route::group(['prefix' => 'admin'], function(){
	Route::get('/','DashboardController@index')->name('dashboard');

	Route::resource('category','CategoryController');
	Route::resource('grade','GradeController');
	Route::resource('course','CourseController');
	Route::resource('teacher','TeacherController');
	Route::resource('student','StudentController');
	Route::resource('article','ArticleController');
	Route::resource('gallery','GalleryController');
});