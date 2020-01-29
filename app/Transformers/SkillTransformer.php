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
    // public function transform(Skill $skill)
    // {
    //     $attributes = $skill->toArray();

    //     unset(
    //         $attributes['id'],
    //         $attributes['created_at'],
    //         $attributes['updated_at']
    //     );

    //     if ($skill->image != null) {
    //         $attributes['image'] = config('app.url').'/'.$skill->image;
    //     }

    //     return $attributes;
    // }

    protected $availableIncludes = [
        'category'
    ];

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

        if ($skill->image != null) {
            $attributes['image'] = config('app.url').'/'.$skill->image;
        } else {
            $attributes['image'] = config('app.url').'/storage/skills/default.png';
        }

        return $attributes;
    }

    public function includeCategory(Skill $skill)
    {
        return $this->item($skill->category, new CategoryTransformer());
    }
}
