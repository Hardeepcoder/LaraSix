<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function(){
    return view('loadPost');
})->name('test');


//admin 
Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function(){
    Route::get('/', function(){
            return view('admin.index');
    });
    Route::any('addPost', 'adminController@addPost');
    Route::any('posts', 'adminController@posts');

});
Route::any('allposts','apiController@allposts');
Route::get('/logout', 'Auth\LoginController@logout');