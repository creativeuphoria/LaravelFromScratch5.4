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

Route::get('/about', function () {

    $todoList = [
        'Learn Laravel 5.4 from scratch',
        'Watch Liverpool vs Wolves',
        'Clean the house',
        'Wash the car'
    ];

    return view('about', [
       'pageName' => 'About Us',
       'todoList' => $todoList
    ]);

});
