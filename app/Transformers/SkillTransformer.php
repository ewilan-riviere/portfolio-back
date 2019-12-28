<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Skill;

class SkillTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Skill $skill)
    {
        $attributes = $skill->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        return $attributes;
    }
}
