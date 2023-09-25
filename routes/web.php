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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//All Backend routing
Route::get('class/view', 'ClassController@classview');
Route::get('class/add', 'ClassController@classadd');
Route::post('class/insert', 'ClassController@classinsert');
Route::get('class/delete/{class_id}', 'ClassController@classdelete');
Route::get('class/edit/{class_id}', 'ClassController@classedit');
Route::post('class/edit/insert', 'ClassController@classeditinsert');

Route::get('section/view', 'SectionController@sectionview');
Route::get('section/add', 'SectionController@sectionadd');
Route::post('section/insert', 'SectionController@sectioninsert');
Route::get('section/delete/{section_id}', 'SectionController@sectiondelete');
Route::get('section/edit/{section_id}', 'SectionController@sectionedit');
Route::post('section/edit/insert', 'SectionController@sectioneditinsert');

Route::get('student/view', 'StudentController@studentview');
Route::get('student/add', 'StudentController@studentadd');
Route::post('student/add/insert', 'StudentController@studentaddinsert');
Route::get('student/delete/{student_id}', 'StudentController@studentdelete');
Route::get('student/singleview/{student_id}', 'StudentController@studentsingleview');
Route::get('student/edit/{student_id}', 'StudentController@studentedit');
Route::post('student/edit/insert', 'StudentController@studenteditinsert');

