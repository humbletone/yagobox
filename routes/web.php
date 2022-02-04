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

Route::get('/home', 'HomeController@index')->name('home');

//Authentication takes user to home page after successful signin. 

Auth::routes();

// Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/site', function () {
    return view('sites/firstpage');
});

Route::get('/shop',  function() {
  
   return view('shop');

});

Route::get('/site/textcode', function () {
    return view('sites/textcode');
});

Route::get('/site/completed', function () {
    return view('sites/completed');
});

Route::get('/site/newpage', function () {
    return view('sites/newpage');
});


Route::get('/site/pdf', function () {
    return view('sites/pdf');
});


Route::get('/pdf/{name}', 'SitesController@create');

Route::get('/app/{name}', 'SitesController@create');
Route::get('/pdf', 'SitesController@create');
Route::get('app', 'SitesController@create');


Route::get('/sites/create/{name}', 'SitesController@create');


// Routes::get('/site/{name}', 'SitesController@store');


Route::post('/site', 'SitesController@store');

Route::get('/site/create/{name}', 'SitesController@store');

Route::post('/pincodes', 'PincodesController@store');

