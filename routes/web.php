<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if( Auth::check() ) return redirect('dashboard');
    return view('pages.welcome');
});
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/dashboard', 'UsersController@dashboard');
Route::post('/users/{username}', 'UsersController@uploadFile');

// Route::model('users', 'App\User');
Route::resource('users', 'UsersController', ['except' => [ 'create', 'store' ]]);
Route::post('/search', function( Request $request ) {
    dd($request->all());
});
