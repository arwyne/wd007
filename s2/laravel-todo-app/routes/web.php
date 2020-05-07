<?php

use Illuminate\Support\Facades\Route;

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


// Laravel create a RESTful methods that we can use in our CRUD functionalities
Route::get('/tasks', 'TaskController@viewTaskPage');
Route::post('/tasks/add', 'TaskController@addTask');
// {id} -> wildcard
Route::delete('/tasks/delete/{taskid}', 'TaskController@deleteTask');
Route::patch('/tasks/update/{taskid}', 'TaskController@updateTask');