<?php

namespace App\Transformers;

use App\Models\Text;
use League\Fractal\TransformerAbstract;

class TextTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Text $text)
    {
        $attributes = $text->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        return $attributes;
    }
}
