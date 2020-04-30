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

/*

Route -> used to create a route
:: (double colon) - scope resolution operator
get() -> method to use, it has 2 parameters
			- 1st param, '/name of the route'
			- 2nd param, function or controller that will execute the functionality or the process for the application

*/
/*
	default url '/'
*/

Route::get('/welcome', function () {
    return view('welcome');
    	//view() -> this knows blade.php
});


Route::get('/my-profile', function() {
	return view('myprofile');
});

Route::get('/my-work-experience', function() {
	return view('workexperience');
});

Route::get('/my-skill-set', function() {
	return view('skillset');
});
