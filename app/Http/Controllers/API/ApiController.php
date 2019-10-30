<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class ApiController extends Controller
{
    /**
     * 
     *  Display users
     * 
     * @return JSON
     * 
     */
    public function users() {
        $users = User::all();

        $json = $users;
        return response()->json($json);
    }
}
