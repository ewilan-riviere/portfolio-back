<?php

namespace App\Http\Controllers\Api;

use App\Models\Developer;
use App\Http\Controllers\Controller;
use App\Http\Resources\DeveloperResource;

class DeveloperController extends Controller
{
    public function index()
    {
        $developers = Developer::with('links')->get();

        return DeveloperResource::collection($developers);
    }
}
