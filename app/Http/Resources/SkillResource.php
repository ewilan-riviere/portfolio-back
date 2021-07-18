<?php

namespace App\Http\Resources;

use App\Providers\SvgProvider;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\Skill $resource
 */
class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $result = [
            'title'           => $this->title,
            'slug'            => $this->slug,
            'version'         => $this->version,
            'link'            => $this->link,
            'isFree'          => $this->is_free,
            'color'           => $this->color,
            'subtitle'        => $this->subtitle,
            'details'         => $this->details,
            'isFavorite'      => $this->is_favorite,
            'rating'          => $this->rating,
            'image'           => $this->image ? SvgProvider::icon($request, $this->resource) : null,
            'blockquote'      => [
                'text'  => $this->blockquote_text,
                'who'   => $this->blockquote_who,
            ],
        ];

        if ($this->light) {
            $result = [
                'title'           => $this->title,
                'color'           => $this->color,
            ];
        }

        return $result;
    }
}
