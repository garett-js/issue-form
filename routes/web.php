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

// Page Route 
//Route::get('/',        'PagesController@home');
Route::get('/',        'ProjectsController@showIssueProject')->name('home');;
Route::get('/contact', 'PagesController@contact');
Route::get('/about',   'PagesController@about');

// Project Route
Route::resource('projects', 'ProjectsController');

// Task Route
Route::post('/projects/{project}/tasks/', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}/', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}/', 'CompletedTasksController@destroy');

// Issue Route
Route::resource('issues', 'IssuesController');

// Employee Route
Route::resource('employees', 'EmployeesController');


//Test Route
Route::get('/tests/{test}', 'TestsController@show');


// Upload images Rotue
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

// Authorization
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');