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


Route::get('/', array('as' => 'home', function(){
    return View::make('index');
}) );

Route::resource('users', 'UserController');


// Migrations
Route::get('migrate', function(){
    echo '<br>init migrate...';
    Artisan::call('migrate', ['--quiet' => true, '--force' => true]);
    echo 'done migrate';
});

Route::get('rollback', function(){
    echo '<br>init migrate:rollback';
    Artisan::call('migrate:rollback', ['--quiet' => true, '--force' => true]);
    echo 'done migrate:rollback';
});