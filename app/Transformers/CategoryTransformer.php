<?php

namespace App\Transformers;

use App\Models\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'skills',
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Category $category)
    {
        $attributes = $category->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        // return [
        //     'id' => $category->id,
        // ];

        return $attributes;
    }

    public function includeSkills(Category $category)
    {
        return $this->collection($category->skills, new SkillTransformer());
    }
}
