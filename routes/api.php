<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\DeveloperController;
use App\Http\Controllers\Api\FormationController;
use App\Http\Controllers\Api\SubmissionController;

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
Route::get('/formations/{formation}', [FormationController::class, 'show'])->name('formations.show');
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::get('/skills-by-categories', [SkillController::class, 'categories'])->name('skills.categories');
Route::get('/developers', [DeveloperController::class, 'index'])->name('developers.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/projects/count', [ProjectController::class, 'count'])->name('projects.count');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

/*
 * Submissions routes
 */
Route::post('submission', [SubmissionController::class, 'send'])->name('api.submission.send');
