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
// route: index route '/'
Route::name('blogs_path')->get('/blogs','BlogsController@index');
// route: blogs/create '/blogs/create '
Route::name('create_blog_path')->get('/blogs/create', 'BlogsController@create');
// store: blog path that was just created
Route::name('store_blog_path')->post('/blogs', 'BlogsController@store');
// routeL blogs/edit 'blogs/edit'
Route::name('edit_blog_path')->get('/blogs/edit', 'BlogsController@edit');
// route blogs/delete 'blogs/delete'
Route::name('delete_blog_path')->get('/blogs/delete', 'BlogsController@delete');
