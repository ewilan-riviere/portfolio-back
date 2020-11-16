<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Transformers\ProjectTransformer;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
    /**
     * @OA\Get(
     *     path="/projects",
     *     tags={"portfolio"},
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
        $projects = Project::with('skills')->orderBy('order')->get();

        if ($request->limit) {
            $limit = $request->limit;
            if (sizeof($projects) < $limit) {
                $limit = sizeof($projects);
            }
            $projects = $projects->slice(0, $limit);
        }

        return fractal($projects, new ProjectTransformer())
            ->includeSkills(['skills']);
    }
}
