<?php

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
    Route::any('addPost', 'adminController@addPost');

});

Route::get('/logout', 'Auth\LoginController@logout');