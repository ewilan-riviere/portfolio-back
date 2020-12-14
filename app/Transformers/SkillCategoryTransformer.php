<?php

namespace App\Transformers;

use App\Models\SkillCategory;
use League\Fractal\TransformerAbstract;

class SkillCategoryTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'skills',
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(SkillCategory $skillCategory)
    {
        $attributes = $skillCategory->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        return $attributes;
    }

    public function includeSkills(SkillCategory $skillCategory)
    {
        return $this->collection($skillCategory->skills, new SkillTransformer());
    }
}
