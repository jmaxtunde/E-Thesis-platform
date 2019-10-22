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
    return view('index');
});

// Route users
Auth::routes();

// Routes sindams
Route::prefix('sindam')->group(function() {
    Route::get('/login', 'Auth\SindamsLoginController@showLoginForm')->name('sindam.login');
    Route::post('/login', 'Auth\SindamsLoginController@login')->name('sindam.login.submit');
    Route::get('/', 'SindamsController@index')->name('sindam.dashboard');
  });

  // Routes university
    Route::prefix('university')->group(function() {
    Route::get('/login', 'AuthUniversity\UniversityLoginController@showLoginForm')->name('universitylogin');
    Route::post('/login', 'AuthUniversity\UniversityLoginController@login')->name('universitylogin.submit');
    Route::get('/', 'UniversityController@index')->name('university.dashboard');

    Route::get('/register', 'Auth\UniversityRegisterController@showRegisterForm')->name('universityregister');
    Route::post('/register', ['as' =>'university.register','uses'=>'Auth\UniversityRegisterController@register']);
    //Route::post('/register', 'Auth\UniversityRegisterController@create')->name('universityregister.submit');
  });


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
