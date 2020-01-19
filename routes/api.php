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
Route::get('/login', 'API\ApiController@login')->name('api-login');
Route::get('/skills', 'API\ApiController@skills')->name('api-skills');
Route::get('/categories', 'API\ApiController@categories')->name('api-categories');
Route::get('/projects', 'API\ApiController@projects')->name('api-projects');
Route::get('/formations', 'API\ApiController@formations')->name('api-formations');
Route::get('/passions', 'API\ApiController@passions')->name('api-passions');
Route::get('/texts', 'API\ApiController@texts')->name('api-texts');
Route::get('/medias', 'API\ApiController@medias')->name('api-medias');
Route::get('/socials', 'API\ApiController@socials')->name('api-socials');
