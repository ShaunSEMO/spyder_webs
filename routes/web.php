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
    return View::make('pages.landing');
});

Route::get('/home', 'HomeController@index');

Route::get('/need_website', function () {
    return View::make('pages.need_website');
});

Route::get('/about', function () {
    return View::make('pages.about');
});


Route::resource('types', 'TypesController');

Route::resource('blog', 'BlogController');

Route::get('/yes', 'YesNos@yes');
Route::get('/no', 'YesNos@no');
