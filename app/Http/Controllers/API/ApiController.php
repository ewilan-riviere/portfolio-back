<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Technology;

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

    /**
     * 
     *  Display technologies
     * 
     * @return JSON
     * 
     */
    public function technologies() {
        $technologies = Technology::all();

        $json = $technologies;
        return response()->json($json);
    }
}
