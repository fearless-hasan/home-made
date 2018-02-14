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


//Order
Route::get('/Order/{id}',[
    'uses'=>'OrderController@index',
    'as'=>'order'
]);



//category

Route::get('/category/new',[
    'uses'=>'CategoryController@index',
    'as'=>'new-category'
]);

Route::get('/category/manage',[
    'uses'=>'CategoryController@getAllCategoty',
    'as'=>'manage-category'
]);

Route::get('/category/edit/{id}',[
    'uses'=>'CategoryController@getCategoryById',
    'as'=>'edit-category'
]);

Route::post('/category/add',[
    'uses'=>'CategoryController@addCategory',
    'as'=>'add-category'
]);

Route::get('/category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategory',
    'as'=>'delete-category'
]);

Route::get('/category/publish/{id}',[
    'uses'=>'CategoryController@publishCategory',
    'as'=>'publish-category'
]);

Route::get('/category/unpublish/{id}',[
    'uses'=>'CategoryController@unpublishCategory',
    'as'=>'unpublish-category'
]);

Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategory',
    'as'=>'update-category'
]);


//sub-category

Route::get('/sub-category/new',[
    'uses'=>'SubCategoryController@index',
    'as'=>'new-sub-category'
]);

Route::get('/sub-category/manage',[
    'uses'=>'SubCategoryController@getAllSubCategory',
    'as'=>'manage-sub-category'
]);

Route::get('/sub-category/edit/{id}',[
    'uses'=>'SubCategoryController@getSubCategoryById',
    'as'=>'edit-sub-category'
]);

Route::post('/sub-category/add',[
    'uses'=>'SubCategoryController@addSubCategory',
    'as'=>'add-sub-category'
]);

Route::get('/sub-category/delete/{id}',[
    'uses'=>'SubCategoryController@deleteSubCategory',
    'as'=>'delete-sub-category'
]);

Route::get('/sub-category/publish/{id}',[
    'uses'=>'SubCategoryController@publishSubCategory',
    'as'=>'publish-sub-category'
]);

Route::get('/sub-category/unpublish/{id}',[
    'uses'=>'SubCategoryController@unpublishSubCategory',
    'as'=>'unpublish-sub-category'
]);

Route::post('/sub-category/update',[
    'uses'=>'SubCategoryController@updateSubCategory',
    'as'=>'update-sub-category'
]);


//item

Route::get('/item/new',[
    'uses'=>'ItemController@index',
    'as'=>'new-item'
]);

Route::get('/item/manage',[
    'uses'=>'ItemController@getAllItem',
    'as'=>'manage-item'
]);

Route::get('/item/edit/{id}',[
    'uses'=>'ItemController@getItemById',
    'as'=>'edit-item'
]);

Route::post('/item/add',[
    'uses'=>'ItemController@addItem',
    'as'=>'add-item'
]);

Route::get('/item/delete/{id}',[
    'uses'=>'ItemController@deleteItem',
    'as'=>'delete-item'
]);

Route::get('/item/publish/{id}',[
    'uses'=>'ItemController@publishItem',
    'as'=>'publish-item'
]);

Route::get('/item/unpublish/{id}',[
    'uses'=>'ItemController@unpublishItem',
    'as'=>'unpublish-item'
]);

Route::post('/item/update',[
    'uses'=>'ItemController@updateItem',
    'as'=>'update-item'
]);

//review

Route::get('/review/new',[
    'uses'=>'ReviewController@index',
    'as'=>'new-review'
]);

Route::get('/review/manage',[
    'uses'=>'ReviewController@getAllReview',
    'as'=>'manage-review'
]);

Route::get('/review/edit/{id}',[
    'uses'=>'ReviewController@getReviewById',
    'as'=>'edit-review'
]);

Route::post('/review/add',[
    'uses'=>'ReviewController@addReview',
    'as'=>'add-review'
]);

Route::get('/review/delete/{id}',[
    'uses'=>'ReviewController@deleteReview',
    'as'=>'delete-review'
]);

Route::get('/review/publish',[
    'uses'=>'ReviewController@publishReview',
    'as'=>'publish-review'
]);

Route::get('/review/unpublish',[
    'uses'=>'ReviewController@unpublishReview',
    'as'=>'unpublish-review'
]);

Route::get('/review/update',[
    'uses'=>'ReviewController@updateReview',
    'as'=>'update-review'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
