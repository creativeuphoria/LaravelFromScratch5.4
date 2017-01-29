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

// Home
Route::get('/', function () {
    return view('welcome');
});

// About Us
Route::get('/about', function () {
    return view('about', [
        'pageName' => 'About Us'
    ]);
});

// Tasks
Route::get('/tasks', function () {

    $taskList = DB::table('tasks')->latest()->get();

    return view('tasks.index', [
       'pageName' => 'Tasks',
       'taskList' => $taskList
    ]);

});

// Tasks -> Task
Route::get('/tasks/{id}', function ($id) {

    $task = DB::table('tasks')->find($id);

    return view('tasks.task', [
       'pageName' => 'Tasks &rarr; ' . $id,
       'task' => $task
    ]);

});