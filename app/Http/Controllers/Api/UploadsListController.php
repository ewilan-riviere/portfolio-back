<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class UploadsListController extends Controller
{
    public function index() {
        $files = Storage::disk('uploads')->files();

        $format = [];
        foreach ($files as $key => $file) {
            $file = config('app.url').'/uploads/'.$file;
            array_push($format, $file);
        }

        return response()->json($format);
    }
}
