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
    return redirect('login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('quiz', "QuizController");
    Route::resource('dashboard', "DashboardController");
    Route::resource('users', "UserController");
    Route::resource('people', "PeopleController");
    Route::resource('calibration', "CalibrationController");
    Route::resource('settings', "SettingController");
    
});



Auth::routes();
