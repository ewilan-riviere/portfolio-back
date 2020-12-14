<?php

namespace App\Http\Controllers\Api;

use App\Models\Formation;
use App\Http\Controllers\Controller;
use App\Transformers\FormationTransformer;

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
        $formations = Formation::with('projects')->orderBy('date_end', 'asc')->get();

        return fractal($formations, new FormationTransformer());
    }
}
