<?php

namespace App\Transformers;

use App\Models\Skill;
use League\Fractal\TransformerAbstract;

class SkillTransformer extends TransformerAbstract
{
    protected bool $light;

    public function __construct($light = false)
    {
        $this->light = $light;
    }

    protected $availableIncludes = [
        'category',
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Skill $skill)
    {
        $skillApi = [
            'title'           => $skill->title,
            'slug'            => $skill->slug,
            'version'         => $skill->version,
            'link'            => $skill->link,
            'is_free_app'     => $skill->is_free_app,
            'color'           => $skill->color,
            'subtitle'        => $skill->subtitle,
            'details'         => $skill->details,
            'is_favorite'     => $skill->is_favorite,
            'rating'          => $skill->rating,
            'image'           => getImage($skill->image),
            'blockquote_text' => $skill->blockquote_text,
            'blockquote_who'  => $skill->blockquote_who,
        ];

        if ($this->light) {
            $skillApi = [
                'title'           => $skill->title,
            ];
        }

        return $skillApi;
    }

    public function includeCategory(Skill $skill)
    {
        return $this->item($skill->category, new SkillCategoryTransformer());
    }
}
