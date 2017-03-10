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
Route::get('/start_project_', 'DashboardController@start_Project');

Route::get('/dashboard', 'DashboardController@dashboard');

Route::post('/create_project', 'DashboardController@create_project');

Route::post('/add_section', 'DashboardController@add_section');

Route::post('/edit_section', 'DashboardController@edit_section');

Route::post('/Open_section', 'DashboardController@Open_section');

Route::post('/Delete_section', 'DashboardController@Delete_section');

Route::get('/Section_dashboard', 'Section_controller@dashboard');

Route::get('/', 'HomeController@index');

Route::get('/add_condition_index', 'Section_controller@add_condition_index');

Route::post('/add_condition_index_post', 'Section_controller@add_condition_index_post');


Auth::routes();

Route::get('/home', 'HomeController@index');


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
