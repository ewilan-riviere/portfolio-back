<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectCollection;
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
        $byFavorite = false;
        if ('true' === $request->favorite) {
            $byFavorite = true;
        }
        $limit = null;
        if ($request->limit) {
            $limit = $request->limit;
        }

        $projects = Project::whereIsDisplay(true)
            ->with('skills', 'developers', 'formation');

        if ($limit) {
            if (! Project::count() < $limit) {
                $projects = $projects->limit($limit);
            }
        }
        if ($byFavorite) {
            $projects = $projects->orderBy('is_favorite', 'desc');
        }

        $projects = $projects->orderBy('created_at', 'desc')->get();

        return ProjectCollection::collection($projects);
    }

    public function show(string $project)
    {
        $project = Project::whereIsDisplay(true)
            ->whereSlug($project)
            ->with('skills', 'developers', 'formation')
            ->firstOrFail();

        return ProjectResource::make($project);
    }
}
