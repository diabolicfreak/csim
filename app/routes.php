<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//    $name = 'lordvcs';
//	return View::make('hello')->with('namsa', $name);
//});
//
//Route::get('/db', function()
//{
//    /*return DB::table('select database();');*/
//    $users = DB::table('users')->get();
//
//      var_dump($users);
//
//});

Route::get('/', function(){
    return View::make('index');
});

Route::resource('users', 'UserController');