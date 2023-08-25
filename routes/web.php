<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\FirstController@Welcome');
Route::get('/home', 'App\Http\Controllers\FirstController@Home');
Route::get('/qp', 'App\Http\Controllers\FirstController@QueryParameter');
Route::get('/rp/{name}/{age}', 'App\Http\Controllers\FirstController@RouteParameter');


// CRUD application ROUTES
// ------------------------------
// list
Route::get('/products', 'App\Http\Controllers\FirstController@Products');

// create
Route::get('/pro_create', 'App\Http\Controllers\FirstController@ProductCreate_get');
Route::post('/pro_create', 'App\Http\Controllers\FirstController@ProductCreate_post');

// edit
Route::get('/pro_edit/{id}', 'App\Http\Controllers\FirstController@ProductEdit_get');
Route::post('/pro_edit/{id}', 'App\Http\Controllers\FirstController@ProductEdit_post');

// delete
Route::get('/pro_delete/{id}', 'App\Http\Controllers\FirstController@ProductDelete');