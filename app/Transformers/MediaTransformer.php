<?php

namespace App\Transformers;

use App\Models\Media;
use League\Fractal\TransformerAbstract;

class MediaTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Media $media)
    {
        $attributes = $media->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        if (null != $media->media) {
            $attributes['media'] = url('storage').'/'.$media->media;
        }

        return $attributes;
    }
}
