<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Formation;

class FormationTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Formation $formation)
    {
        $attributes = $formation->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        if ($formation->logo != null) {
            $attributes['logo'] = url('storage').'/'.$formation->logo;
        }

        return $attributes;
    }
}
