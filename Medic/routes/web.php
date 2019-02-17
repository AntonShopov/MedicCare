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
Route::get('index',function(){
	$deceases=\App\Decease::all();
	return View::make('profile.index')->with('deceases',$deceases);
});

Auth::routes();
Route::post('/store/{id}', 'DeceaseController@store')->name('store');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('decease', function () {
return view('profile.addDecease');
});
