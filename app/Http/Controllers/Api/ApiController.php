<?php

namespace App\Http\Controllers\Api;

use App\Models\Formation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="API",
 *     description="Portfolio of Ewilan Rivière portfolio"
 * ),
 * @OA\Tag(
 *     name="global",
 *     description="Global requests"
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
