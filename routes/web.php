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

// ## --- HomeContoller routes begin

Route::get('/home', 'HomeController@start_project');

Route::get('/start_project', 'HomeController@start_project');

Route::post('/Open_project', 'HomeController@Open_project');

Route::post('/Delete_project', 'HomeController@Delete_project');

Route::get('/', 'HomeController@index');

// ## -- HomeController end


//## ---- Dashboard Controller routes begin
//Route::get('/start_project_', 'DashboardController@start_Project');

Route::get('/dashboard', 'DashboardController@dashboard');

Route::post('/create_project', 'DashboardController@create_project');

Route::post('/add_section', 'DashboardController@add_section');

Route::post('/edit_section', 'DashboardController@edit_section');

Route::post('/Open_section', 'DashboardController@Open_section');

Route::post('/Delete_section', 'DashboardController@Delete_section');
//### --- Dashboard Contrller --end

// ### -- Section Controller -- begin
Route::get('/Section_dashboard', 'Section_controller@dashboard');

Route::get('/add_condition_index', 'Section_controller@add_condition_index');

Route::post('/add_condition_index_post', 'Section_controller@add_condition_index_post');

Route::get('/distress_Identification', 'Section_controller@distress_Identification');

Route::post('/open_distress_pictures', 'Section_controller@open_distress_pictures');

Route::post('/add_distress_pictures', 'Section_controller@add_distress_pictures');

// ### --- Section Controller -- end

Auth::routes();


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
