<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Technology;

class TechnologyTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Technology $technology)
    {
        $attributes = $technology->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        return $attributes;
    }
}
