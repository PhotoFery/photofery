<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'MainController@index')->name('main');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/termscondition', 'MainController@termscondition')->name('termscondition');
Route::get('/contact', 'MainController@contact')->name('contact');

Route::group(['namespace' => 'Backend'], function () {

	Route::get('/login', 'AuthController@showLoginForm')->name('login');
	Route::post('/login', 'AuthController@processLoginForm');


    Route::group(['middleware' => 'auth'], function () { 

	Route::get('/logout', 'AuthController@logout')->name('logout');

	Route::get('/dashboard', 'CreateNewAdminController@dashboard')->name('dashboard');

	Route::get('/createadmin', 'CreateNewAdminController@createadmin')->name('createadmin');
	Route::post('/createadmin', 'CreateNewAdminController@createadminprocess');

	Route::get('/edit/{id}', 'CreateNewAdminController@createadminupdate')->name('createadminupdate');
	Route::post('/edit/{id}', 'CreateNewAdminController@createadminupdateprocess');

	Route::get('/createadminlist', 'CreateNewAdminController@createadminlist')->name('createadminlist');
	Route::post('/createadmindelete/{id}', 'CreateNewAdminController@destroy')->name('createadmindelete');

	});


Route::group(['prefix' => 'subscribe'], function () {
		Route::post('/create', 'SubscribeController@subscribecreateprocess')->name('subscribecreateprocess');
		Route::get('/list', 'SubscribeController@subscribelist')->name('subscribelist');
		Route::post('/subscribedelete/{id}', 'SubscribeController@destroy')->name('subscribedelete');
	});

	Route::group(['prefix' => 'photographer'], function () {
		Route::post('/create', 'PhotographerController@photographercreateprocess')->name('photographercreateprocess');
		Route::get('/list', 'PhotographerController@photographerlist')->name('photographerlist');
		Route::post('/photographerdelete/{id}', 'PhotographerController@destroy')->name('photographerdelete');
	});

    Route::group(['prefix' => 'imageslider'], function () {
		Route::get('/create', 'ImagesliderController@imageslidercreate')->name('imageslidercreate');
		Route::post('/create', 'ImagesliderController@imageslidercreateprocess')->name('imageslidercreateprocess');
		Route::get('/list', 'ImagesliderController@imagesliderlist')->name('imagesliderlist');
		Route::post('/imagesliderdelete/{id}', 'ImagesliderController@destroy')->name('imagesliderdelete');
	}); 

	Route::group(['prefix' => 'message'], function () {
		Route::post('/create', 'MessageController@messagecreateprocess')->name('messagecreateprocess');
		Route::get('/list', 'MessageController@messagelist')->name('messagelist');
		Route::post('/messagedelete/{id}', 'MessageController@destroy')->name('messagedelete');
	});
});