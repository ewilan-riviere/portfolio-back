<?php

use Illuminate\Support\Facades\Route;

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

Route::group([
    'namespace'  => 'Api',
    'middleware' => 'api',
], function () {
    Route::get('/global/uploads', 'UploadsListController@index')->name('uploads.index');

    Route::get('/users', 'ApiController@users')->name('users');
    Route::get('/login', 'ApiController@login')->name('login');
    Route::get('/portfolio/skills', 'ApiController@skills')->name('skills');
    Route::get('/categories', 'ApiController@categories')->name('categories');
    Route::get('/projects', 'ApiController@projects')->name('projects');
    Route::get('/formations', 'ApiController@formations')->name('formations');
    Route::get('/passions', 'ApiController@passions')->name('passions');
    Route::get('/texts', 'ApiController@texts')->name('texts');
    Route::get('/medias', 'ApiController@medias')->name('medias');
    Route::get('/socials', 'ApiController@socials')->name('socials');

});
