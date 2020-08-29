<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="Portfolio API",
 *     description="Portfolio · Swagger"
 * ),
 * @OA\Tag(
 *     name="global",
 *     description="Requêtes globales"
 * ),
 * @OA\Tag(
 *     name="portfolio",
 *     description="Portfolio"
 * ),
 */
class ApiController extends Controller
{
    public function __construct()
    {
        // Route::bind('post', function ($slug) {
        //     return Post::whereSlug($slug)->firstOrFail();
        // });

        // Route::bind('tag', function ($slug) {
        //     return Tag::whereSlug($slug)->firstOrFail();
        // });
    }
}
