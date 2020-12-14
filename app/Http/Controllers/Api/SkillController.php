<?php

namespace App\Http\Controllers\Api;

use App\Models\Skill;
use App\Models\SkillCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Http\Resources\SkillCategoryResource;
use Symfony\Component\HttpFoundation\Request;

class SkillController extends Controller
{
    /**
     * @OA\Get(
     *     path="/skills",
     *     tags={"global"},
     *     summary="Liste des compétences",
     *     description="Les compétences",
     *      @OA\Parameter(
     *          name="categories",
     *          description="Slug ou nom de tags liés à l'article",
     *          in="query",
     *          @OA\Schema(
     *              type="array",
     *             @OA\Items(
     *                 type="string"
     *             )
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="favorite",
     *          description="Nombre de résultats",
     *          in="query",
     *          @OA\Schema(
     *              type="boolean"
     *          )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index(Request $request)
    {
        $skills = Skill::with('category')->orderBy('title')->get();

        if ($request->favorite) {
            $skills = $skills->filter(function ($skill) {
                return $skill->is_favorite;
            })->values();
        }

        if ($request->shuffle) {
            $skills = $skills->shuffle();
        }

        if ($request->categories) {
            $categories = explode(',', $request->categories);
            $result = [];

            foreach ($skills as $key => $skill) {
                if (in_array($skill->category->slug, $categories)) {
                    array_push($result, $skill);
                }
            }
            $skills = $result;
        }

        if ($request->limit) {
            $skills = array_slice($skills, 0, $request->limit);
        }

        return SkillResource::collection($skills);
    }

    /**
     * @OA\Get(
     *     path="/skills-by-categories",
     *     tags={"portfolio"},
     *     summary="Liste des compétences par catégories",
     *     description="Les compétences par catégories",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function categories()
    {
        $categories = SkillCategory::all();

        $categories->load(['skills' => function ($query) {
            $query->orderBy('title');
        }]);

        return SkillCategoryResource::collection($categories);
    }
}
