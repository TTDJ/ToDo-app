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

    $name = 'niño';

    return view('welcome', compact('name'));
});

Route::get('/tasks', function () {

    $name = 'chico';
    $tasks = DB::table('tasks')->get();

    return view('tasks/index', compact('name', 'tasks'));
});

Route::get('/tasks/{task}', function ($id) {

    $name = 'compańero';
    $task = DB::table('tasks')->find($id);

    return view('tasks/show', compact('name', 'task'));
});

Route::get('/about', function () {
    return view('about');
});
