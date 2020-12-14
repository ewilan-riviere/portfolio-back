<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\ProjectController;
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

Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::get('/skills-by-categories', [SkillController::class, 'categories'])->name('skills.categories');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
