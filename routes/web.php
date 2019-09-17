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
//admin 
Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function(){
    Route::get('/', function(){
            return view('admin.index');
    });

    Route::get('addPost', function(){
        return view('admin.addPost');
});

});
Route::get('/logout', 'Auth\LoginController@logout');