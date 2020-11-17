<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\FormationController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('agencies', 'AgencyController@index')->name('agencies.index');

Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/skills', [SkillController::class, 'index'])->name('formations.index');
Route::get('/skills-by-categories', 'SkillController@byCategories')->name('formations.byCategories');
Route::get('/projects', 'ProjectController@index')->name('formations.index');

Route::get('/texts', 'TextController@index')->name('formations.index');
// Route::get('/users', 'ApiController@users')->name('users');
// Route::get('/login', 'ApiController@login')->name('login');
// Route::get('/skills', 'ApiController@skills')->name('skills');
// Route::get('/categories', 'ApiController@categories')->name('categories');
// Route::get('/projects', 'ApiController@projects')->name('projects');
// Route::get('/passions', 'ApiController@passions')->name('passions');
// Route::get('/texts', 'ApiController@texts')->name('texts');
// Route::get('/medias', 'ApiController@medias')->name('medias');
// Route::get('/socials', 'ApiController@socials')->name('socials');
