<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/',function()
{
            return view('home');
});
*/
Route::get('/', 'HomeController@home');
Route::get ('/home','HomeController@home');
Route::get('absence', 'AbsenceController@index');
Route::get('absence/tambah', 'AbsenceController@tambah');
Route::post('absence', 'AbsenceController@simpan');