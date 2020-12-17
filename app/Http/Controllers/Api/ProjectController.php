<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
    /**
     * @OA\Get(
     *     path="/projects",
     *     tags={"global"},
     *     summary="Liste des projets",
     *     description="Les projets",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index(Request $request)
    {
        $projects = Project::published()->with('skills', 'developers', 'formation')->orderBy('created_at', 'desc')->get();

        if ($request->limit) {
            $limit = $request->limit;
            if (sizeof($projects) < $limit) {
                $limit = sizeof($projects);
            }
            $projects = $projects->slice(0, $limit);
        }

        return ProjectResource::collection($projects);

        // return fractal($projects, new ProjectTransformer())
        //     ->includeSkills()
        //     ->includeDevelopers();
    }
}
