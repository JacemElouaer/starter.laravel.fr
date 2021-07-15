<?php


Route::get('/', function () {
    return view('welcome'); 
});


Route::get('landing' ,  function(){
    return view('landing'); 
}); 
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');  


Auth::routes(['verify'=>true]);