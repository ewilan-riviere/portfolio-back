<?php

namespace App\Http\Controllers\Api;

use App\Models\Formation;
use App\Http\Controllers\Controller;
use App\Http\Resources\FormationResource;

class FormationController extends Controller
{
    /**
     * @OA\Get(
     *     path="/formations",
     *     tags={"global"},
     *     summary="Liste des formations",
     *     description="Les formations",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index()
    {
        $formations = Formation::whereIsDisplay(true)
            ->with('projects')
            ->orderBy('date_end', 'desc')
            ->get();

        return FormationResource::collection($formations);
    }

    public function show(string $formation_slug)
    {
        $formation = Formation::whereSlug($formation_slug)->firstOrFail();

        return FormationResource::make($formation);
    }
}
