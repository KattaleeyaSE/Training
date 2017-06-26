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

Route::get('/cars', function () {
    return  " Car normal by get no ID " ;
});

//optiaonal require
Route::get('cars/{id}', function($id){
return "Wellcom Car id : ".$id;
});

//optional parameters
Route::get('whatever/{id?}', function($id=null){
return "Wellcom whatever Car id : ".$id;
});

Route::get('carsletter/{name}', function($name){
return "Wellcom define name Car : ".$name;
})->where('name','[A-Za-z]+');


Route::resource('book','BookController');
Route::resource('store', 'StoreController');







