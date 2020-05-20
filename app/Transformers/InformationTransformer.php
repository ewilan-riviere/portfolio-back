<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Information;

class InformationTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Information $information)
    {
        $attributes = $information->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        if ($information->image != null) {
            $attributes['image'] = url('storage').'/'.$information->image;
        }

        return $attributes;
    }
}
