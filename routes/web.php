<?php
//use Illuminate\Support\Str;

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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','FrontController@index');
Route::get('category_post/{slug}','FrontController@category_post')->name('category.post');
Route::get('details/{slug}','FrontController@details')->name('details.post');
Route::get('search','FrontController@search')->name('search');
//Route::get('frontView', function () {
//    return view('frontend/frontView');//});
//Route::get('dashboard', function () {
//    return view('admin/dashboard');
//})->name('admin.dashboard')->middlewire('auth');
Route::middleware('auth')->group(function (){
Route::get('dashboard','HomeController@index')->name('admin.dashboard');
Route::resource('category','CategoryController');
Route::resource('post','PostController');
Route::resource('author','AuthorController');
Route::resource('add','AddController');
});
//Route::get('related/{slug}','FrontController@related')->name('related.post');

