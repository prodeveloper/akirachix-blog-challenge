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
    $blogs = App\Blog::paginate(10);
    return view('landing',['blogs'=>$blogs]);
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::controller('blogs','BlogController');
