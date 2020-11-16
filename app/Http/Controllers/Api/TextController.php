<?php

namespace App\Http\Controllers\Api;

use App\Models\Text;
use App\Http\Controllers\Controller;
use App\Transformers\TextTransformer;

class TextController extends Controller
{
    /**
     * @OA\Get(
     *     path="/texts",
     *     tags={"portfolio"},
     *     summary="Liste des textes",
     *     description="Les textes",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index()
    {
        $texts = Text::all();

        return fractal($texts, new TextTransformer());
    }
}
