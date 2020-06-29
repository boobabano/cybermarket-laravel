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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/index',[
    'uses'=> 'ItemController@getIndex',
    'as'=> 'pages.index'
]);
Route::get('/addToCart/{id}',[
    'uses' => 'ItemController@getAddToCart',
    'as'=> 'item.addToCart'
]);
Route::get('/reduce/{id}',[
    'uses'=> 'ItemController@getReduceByOne',
    'as'=> 'item.reduceByOne'
]);
Route::get('/add/{id}',[
    'uses'=> 'ItemController@getAddByOne',
    'as'=> 'item.addByOne'
]);
Route::get('/remove/{id}',[
    'uses'=> 'ItemController@getRemoveItem',
    'as'=> 'item.removeItem'
]);
Route::get('/clear/{id}',[
    'uses'=> 'ItemController@getClearOrder',
    'as'=> 'order.clear'
]);
Route::get('/cart',[
    'uses' => 'ItemController@getCart',
    'as'=> 'item.cart'
]);
Route::get('/checkout', [
    'uses' => 'ItemController@getCheckout',
    'as'=> 'checkout',
    'middleware'=> 'auth'

]);
Route::post('/checkout', [
    'uses' => 'ItemController@postCheckout',
    'as'=> 'checkout'
]);
Route::get('/login',[
    'uses'=> 'PagesController@getLogin',
    'as'=> 'pages.login',
    'middleware'=> 'guest'
]);
Route::post('/login',[
    'uses'=> 'PagesController@postLogin',
    'as'=> 'pages.login',
    'middleware'=> 'guest'
]);
Route::get('/register',[
    'uses'=> 'PagesController@getRegister',
    'as'=> 'pages.register',
    'middleware'=> 'guest'
]);
Route::post('/register',[
    'uses'=> 'PagesController@postRegister',
    'as'=> 'pages.register',
    'middleware'=> 'guest'
]);
Route::get('/items',[
    'uses'=> 'ItemController@getItems',
    'as'=> 'item.items'
]);
Route::get('/items',[
    'uses'=> 'ItemController@getItems',
    'as'=> 'pages.items'
]);

//*********DETAILS************

Route::get('/details/{id}',[
    'uses'=> 'ItemController@getDetails',
    'as'=> 'pages.details'
]);


Route::get('/userBoard', [
    'uses' => 'PagesController@getUserBoard',
    'as'=> 'pages.userBoard',
    'middleware'=> 'auth'
]);
Route::get('/pages/logout', [
    'uses' => 'PagesController@getLogout',
    'as'=> 'pages.logout',
    'middleware'=> 'auth'
]);

Route::get('/pages/login', function () {
    return view('pages.login');
})->name('login');
