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

Route::get('/home', 'HomeController@index');

// 
Route::get('/start_project_', function() {
    return view('start_project.start_project');
});

Route::get('/dashboard', function() {
    return view('Dashboard.Dashboard_view');
});


Route::get('/login_custom', function() {
    return view('login.login');
});

Route::get('/check_home', function() {
    return view('homepage.home');
});


Route::get('/project_info', function() {
    return view('Dashboard.project_info_view');
});

Route::get('/login____', function() {
    return view('login.login');
});
