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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/','App\Http\Controllers\ClientController@home');
Route::get('/cart','App\Http\Controllers\ClientController@cart');
Route::get('/shop','App\Http\Controllers\ClientController@shop');
Route::get('/checkout','App\Http\Controllers\ClientController@checkout');
Route::get('/login','App\Http\Controllers\ClientController@login');
Route::get('/signup','App\Http\Controllers\ClientController@signup');*/

Route::get('/admin','App\Http\Controllers\AdminController@dashboard');
Route::get('/index','App\Http\Controllers\AdminController@index');
//Route::get('/commandes','App\Http\Controllers\AdminController@commandes');

//pour jeune
Route::get('/ajouterjeune','App\Http\Controllers\JadController@ajouterjeune');
Route::post('/sauverjeune','App\Http\Controllers\JadController@sauverjeune');
Route::get('/jeunes','App\Http\Controllers\JadController@jeunes');
Route::get('/edit_jeune/{id}','App\Http\Controllers\JadController@edit_jeune');
Route::get('/deletejeune/{id}','App\Http\Controllers\JadController@deletejeune');
Route::post('/modifierjeune','App\Http\Controllers\JadController@modifierjeune');
Route::get('/activer_jeune/{id}','App\Http\Controllers\JadController@activer_jeune');
Route::get('/desactiver_jeune/{id}','App\Http\Controllers\JadController@desactiver_jeune');
Route::get('/','App\Http\Controllers\JadController@page1');







