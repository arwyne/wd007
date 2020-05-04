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
	view() -> this knows blade.php
*/
// Route::get('/', function(){
// 	return view('welcome');
// });

Route::get('/', 'ProfileController@showWelcomePage');

Route::get('/my-profile', 'ProfileController@showProfilePage');

Route::get('/my-work-experience', 'ProfileController@showWorkExperiencePage');

Route::get('/my-skill-set', 'ProfileController@showSkillSetPage');
