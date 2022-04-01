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

Route::group(['namespace' => 'App\Http\Controllers\Backend', 'middleware' => 'auth'],function(){
    /* Dashboard */
    Route::get('/', function () {
        return view('backend.dashboard');
    });
    Route::get('dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

//    Route::get('profile', function () {
//        return view('auth.profile');
//    })->name('profile');


    Route::resource('site-setting', 'SiteSettingController');

    Route::resource('service', 'ServiceController');

    Route::resource('about', 'AboutController');

    Route::resource('contact', 'ContactController');

    Route::resource('progress', 'ProgressController');

//    Route::post('/maintenance','AuthController@maintenanceMode')->name('maintenance');
//
//    Route::post('update-profile','AuthController@updateProfile')->name('auth.update-profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
