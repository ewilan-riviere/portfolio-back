<?php

namespace App\Transformers;

use App\Models\Social;
use League\Fractal\TransformerAbstract;

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

        if ('document' == $social->type) {
            $attributes['link'] = url('storage').'/'.$social->link;
        }

        return $attributes;
    }
}
