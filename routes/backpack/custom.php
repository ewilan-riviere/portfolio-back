<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('technology', 'TechnologyCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('formation', 'FormationCrudController');
    Route::crud('media', 'MediaCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::crud('skill', 'SkillCrudController');
    Route::crud('social', 'SocialCrudController');
    Route::crud('text', 'TextCrudController');
    Route::crud('passion', 'PassionCrudController');
}); // this should be the absolute last line of this file