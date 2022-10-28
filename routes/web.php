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
Route::get('/my_page', 'My_pageController@index');

Route::get('/branch', 'BranchController@index');

Route::get('/func', 'FuncController@index');

Route::get('/message', 'MessageController@index');

Route::get('/office', 'OfficeController@index');

Route::get('/ophone', 'OphoneController@index');

Route::get('/quote', 'QuoteController@index');

Route::get('/street', 'StreetController@index');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create');
Route::get('/post/update', 'PostController@update');
Route::get('/post/delete', 'PostController@delete');
Route::get('/post/undelete', 'PostController@undelete');
Route::get('/post/first_or_Create', 'PostController@firstOrCreate');
Route::get('/post/update_Or_Create', 'PostController@updateOrCreate');


Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/posts', 'PostsController@index')->name('posts.index');
