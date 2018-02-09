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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses'  =>  'HomeMadeController@home',
    'as'    =>  '/'
]);

Route::get('/news', [
    'uses'  =>  'HomeMadeController@news',
    'as'    =>  'news'
]);

Route::get('/new-recipe', [
    'uses'  =>  'HomeMadeController@newRecipe',
    'as'    =>  'new-recipe'
]);
Route::get('/post-recipe', [
    'uses'  =>  'HomeMadeController@postRecipe',
    'as'    =>  'post-recipe'
]);
Route::get('/contacts', [
    'uses'  =>  'HomeMadeController@contacts',
    'as'    =>  'contacts'
]);
Route::get('/privacy-policy', [
    'uses'  =>  'HomeMadeController@privacyPolicy',
    'as'    =>  'privacy-policy'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
