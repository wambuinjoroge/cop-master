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

// Route::get('/login', function () {
//     return view('login');
// });
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', function () {
    return view('register');
});
Route::post('/register','AuthController@register');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('register/verify/{token}', 'Auth\RegisterController@verifyEmail');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get('admin', function () {
    return view('admin.panel');
});

Route::get('member', function () {
    return view('member.panel');
});

Route::get('officer', function () {
    return view('officer.panel');
});

Route::get('agent', function () {
    return view('agent.panel');
});
Route::get('clerk', function () {
    return view('clerk.panel');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('help', function () {
    return view('help');
});

Route::get('account', function () {
    return view('account');
});
Auth::routes();

//contacts
Route::get('/contacts', 'ContactsController@index');
Route::get('/contacts/{id}/details', 'ContactsController@viewContactDetails');
Route::post('/contacts', 'ContactsController@searchContact');
//visitor pass
Route::get('/pass', 'PassController@index');
//courier
Route::get('/courier', 'CourierController@index');
//item
Route::get('/item', 'ItemController@index');
//reminder
Route::get('/reminder', 'ReminderController@index');
//diary
Route::get('/diary', 'DiaryController@index');
//aftercare
Route::get('/aftercare', 'AftercareController@index');
//probation
Route::get('/probation', 'ProbationController@index');
//bail
Route::get('/bail', 'BailController@index');
//contribution
Route::get('/contribution', 'ContributionsController@index');
// Administrator routes
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function()
{
    Route::resource('user', 'UserController');
});
