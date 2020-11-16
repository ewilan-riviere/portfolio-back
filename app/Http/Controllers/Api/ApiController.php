<?php

namespace App\Http\Controllers\Api;

use App\Models\Formation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="API",
 *     description="Swagger Front API"
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
        Route::bind('formation', function ($slug) {
            return Formation::whereSlug($slug)->firstOrFail();
        });
    }
}
