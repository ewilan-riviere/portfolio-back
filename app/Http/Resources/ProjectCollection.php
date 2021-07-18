<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\Project $resource
 */
class ProjectCollection extends JsonResource
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
        $lang = $request->lang ?? 'en';

        $discover = null;
        if ($this->links) {
            foreach ($this->links as $key => $link) {
                if ('FRONT' === $link->type->value || 'FRONT_BACK' === $link->type->value) {
                    $discover = $link->project;
                }
            }
        }

        $formation = null;
        if ($this->formation) {
            $formation = [
                'title' => $this->formation->title,
                'slug'  => $this->formation->slug,
            ];
        }

        return [
            'meta' => [
                'slug'                                       => $this->slug,
                'show'                                       => $this->show_link,
            ],
            'title'                                           => $this->title,
            'subtitle'                                        => $this->getTranslation('subtitle', $lang),
            'order'                                           => $this->order,
            'abstract'                                        => $this->getTranslation('abstract', $lang),
            'createdAt'                                       => $this->created_at,
            'formation'                                       => $this->formation ? $formation : null,
            'picture'                                         => [
                'logo'                                  => $this->picture_logo,
                'title'                                 => $this->picture_title,
            ],
            'isFavorite'    => $this->is_favorite,
            'discover'      => $discover,
        ];
    }
}
