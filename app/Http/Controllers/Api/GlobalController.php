<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Models\Media;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Passion;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Transformers\MediaTransformer;
use App\Transformers\SkillTransformer;
use App\Transformers\SocialTransformer;
use App\Transformers\PassionTransformer;
use App\Transformers\CategoryTransformer;

class GlobalController extends Controller
{
    /**
     *  Display users.
     *
     * @return JSON
     */
    public function users()
    {
        $users = User::all();

        $json = $users;

        return response()->json($json);
    }

    /**
     *  Display login user.
     *
     * @return JSON
     */
    public function login()
    {
        $login = User::where('email', '=', 'ewilan@dotslashplay.it')->firstOrFail();

        $json = $login;

        return response()->json($json);
    }

    /**
     *  Display categories with skills.
     *
     * @return JSON
     */
    public function categories()
    {
        // $skills = Category::all();
        // $skills->load(['skills' => function($query)
        // {
        //     $query->orderBy('title');
        // }]);

        // return fractal($skills, new CategoryTransformer())
        //     ->includeSkills(['skills']);
        $categories = Category::all();
        $categories->load(['skills' => function ($query) {
            $query->orderBy('title');
        }]);

        return fractal($categories, new CategoryTransformer())
            ->includeSkills(['skills']);
    }

    /**
     *  Display skills.
     *
     * @return JSON
     */
    public function skills()
    {
        // $skills = Category::all();
        // $skills->load(['skills' => function($query)
        // {
        //     $query->orderBy('title');
        // }]);

        // return fractal($skills, new CategoryTransformer())
        //     ->includeSkills(['skills']);
        $skills = Skill::with('category')->orderBy('title')->get();

        return fractal($skills, new SkillTransformer())
            ->includeCategory(['category']);
    }

    /**
     *  Display projects.
     *
     * @return JSON
     */
    public function projects()
    {
        // ->includeProjectsMembers(['projectsMembers']);
    }

    /**
     *  Display formations.
     *
     * @return JSON
     */
    public function formations()
    {
    }

    /**
     *  Display passions.
     *
     * @return JSON
     */
    public function passions()
    {
        $passions = Passion::all();

        return fractal($passions, new PassionTransformer());
    }

    /**
     *  Display texts.
     *
     * @return JSON
     */
    public function texts()
    {
    }

    /**
     *  Display medias.
     *
     * @return JSON
     */
    public function medias()
    {
        $medias = Media::all();

        return fractal($medias, new MediaTransformer());
    }

    /**
     *  Display socials.
     *
     * @return JSON
     */
    public function socials()
    {
        $socials = Social::all();

        return fractal($socials, new SocialTransformer());
    }
}
