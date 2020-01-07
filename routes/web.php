<?php
use App\User;
use App\Article;

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
Route::get('/users', function () {
    $users = App\User::all();
    return $users;
    //
});
Route::get('articles', function () {
    $users = App\Article::all();
    return $users;
    //
});
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
