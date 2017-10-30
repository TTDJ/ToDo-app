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
Route::get('/', 'TaskController@home')->name('home');
Route::get('/tasks', 'TaskController@index')->name('tasks.list');
Route::get('/tasks/task/{task}', 'TaskController@show')->name('tasks.show');
Route::get('/tasks/create', 'TaskController@create')->name('task.create');
Route::post('/tasks', 'TaskController@store')->name('task.store');
Route::post('/tasks/task/{task}/step', 'StepController@store')->name('step.store');
