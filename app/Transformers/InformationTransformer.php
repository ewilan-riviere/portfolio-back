<?php

namespace App\Transformers;

use App\Models\Information;
use League\Fractal\TransformerAbstract;

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

        if (null != $information->image) {
            $attributes['image'] = url('storage').'/'.$information->image;
        }

        return $attributes;
    }
}
