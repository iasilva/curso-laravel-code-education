<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('categorias','welcomeController@categorias');
Route::get('admin/categories','AdminCategoriesController@index');
Route::get('admin/products','AdminProductsController@index');
Route::get('testando','AdminCategoriesController@teste');
Route::get('teste2/{id}/{name}',function($id,$name){
   echo "Id is $id and name is $name";
});