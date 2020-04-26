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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//for a profile of the user
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/pofile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

//create a post route
Route::get('/p/{post}', 'PostsController@show');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');


