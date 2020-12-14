<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'is_free_app'     => $this->is_free_app,
            'color'           => $this->color,
            'subtitle'        => $this->subtitle,
            'details'         => $this->details,
            'is_favorite'     => $this->is_favorite,
            'rating'          => $this->rating,
            'image'           => getImage($this->image),
            'blockquote_text' => $this->blockquote_text,
            'blockquote_who'  => $this->blockquote_who,
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
