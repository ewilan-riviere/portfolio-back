<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Formation;
use App\Models\Information;
use App\Models\Media;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Technology;
use App\Models\Text;
use App\Models\User;

use App\Transformers\CategoryTransformer;
use App\Transformers\FormationTransformer;
use App\Transformers\InformationTransformer;
use App\Transformers\MediaTransformer;
use App\Transformers\ProjectTransformer;
use App\Transformers\SkillTransformer;
use App\Transformers\SocialTransformer;
use App\Transformers\TechnologyTransformer;
use App\Transformers\TextTransformer;

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

        return fractal($technologies, new TechnologyTransformer());
    }

    /**
     *
     *  Display skills
     *
     * @return JSON
     *
     */
    public function skills() {
        $skills = Skill::with('category')
                    ->get();

        return fractal($skills, new SkillTransformer());
    }

    /**
     *
     *  Display projects
     *
     * @return JSON
     *
     */
    public function projects() {
        $projects = Project::orderBy('title')->get();

        return fractal($projects, new ProjectTransformer());
    }

    /**
     *
     *  Display formations
     *
     * @return JSON
     *
     */
    public function formations() {
        $formations = Formation::all();

        return fractal($formations, new FormationTransformer());
    }

    /**
     *
     *  Display texts
     *
     * @return JSON
     *
     */
    public function texts() {
        $texts = Text::all();

        return fractal($texts, new TextTransformer());
    }

    /**
     *
     *  Display medias
     *
     * @return JSON
     *
     */
    public function medias() {
        $medias = Media::all();

        return fractal($medias, new MediaTransformer());
    }

    /**
     *
     *  Display socials
     *
     * @return JSON
     *
     */
    public function socials() {
        $socials = Social::all();

        return fractal($socials, new SocialTransformer());
    }

}
