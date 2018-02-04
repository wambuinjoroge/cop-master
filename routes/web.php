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
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/', function () {
    return view('welcome');
});
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

//registration detail 
Route::get('/register', 'AuthController@register');
Route::post('/registeruser', 'AuthController@registeruser');

Route::get('register/verify/{token}', 'Auth\RegisterController@verifyEmail');


Route::get('member', function () {
    return view('member.panel');
});

Route::get('faq', function () {
   return view('faq');
});

Route::get('help', function () {
   return view('help');
});


Auth::routes();

//contacts
Route::get('/contacts', 'ContactsController@index');
Route::get('/contacts/{id}/details', 'ContactsController@viewContactDetails');
Route::post('/contacts', 'ContactsController@searchContact');

// Administrator routes
Route::get('admin', function () {
  return view('admin.panel');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
    //Route::resource('adduser', 'UserController');
    Route::resource('user', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::get('change-role/{id}', 'UserController@getChangeRole')->name('user.role');
    Route::post('change-role/{id}', 'UserController@postChangeRole')->name('user.role.change');
});

Route::post('/callback/ussd','UssdController@index');

Route::post('/message', 'MessageController@message');

Route::post('/send-sms', [
   'uses'   =>  'SmsController@getUserNumber',
   'as'     =>  'sendSms'
]);