<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Social;

class SocialTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Social $social)
    {
        $attributes = $social->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        if ($social->type == 'document') {
            $attributes['link'] = url('storage').'/'.$social->link;
        }

        return $attributes;
    }
}
