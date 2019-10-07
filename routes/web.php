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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hr', 'HrController@index')->name('hr');

Route::get('/production', 'ProductionController@index')->name('production');

Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin')->group(function (){
    
    Route::resource('/users','UserController');
});






