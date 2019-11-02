<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', 'API\ApiController@users')->name('api-users');
Route::get('/technologies', 'API\ApiController@technologies')->name('api-technologies');
Route::get('/skills', 'API\ApiController@skills')->name('api-skills');
Route::get('/projects', 'API\ApiController@projects')->name('api-projects');
Route::get('/formations', 'API\ApiController@formations')->name('api-formations');
Route::get('/informations', 'API\ApiController@informations')->name('api-informations');
