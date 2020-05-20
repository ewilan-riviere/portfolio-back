<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Media;

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

        if ($media->media != null) {
            $attributes['media'] = url('storage').'/'.$media->media;
        }

        return $attributes;
    }
}
