<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormationResource extends JsonResource
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
        $projects = ProjectResource::collection($this->projects);
        // $projects->map(function ($i) { $i->light = true; });

        return [
            'slug'             => $this->slug,
            'title'            => $this->title,
            'certificate'      => $this->certificate,
            'level'            => $this->level,
            'resume'           => $this->resume,
            'logo'             => [
                'svg'               => file_get_contents(public_path($this->logo)),
                'color'             => $this->color,
                'haveTextWhite'     => $this->color_text_white,
            ],
            'place'            => [
                'name'             => $this->place,
                'link'             => $this->place_link,
            ],
            'vocational' => [
                'name'       => $this->vocational,
                'link'       => $this->vocational_link,
            ],
            'promo' => [
                'name'            => $this->promo,
                'link'            => $this->promo_link,
            ],
            'date'             => [
                'begin'       => $this->date_begin,
                'end'         => $this->date_end,
            ],
            'status'           => $this->status,
            'projects'         => $projects,
        ];
    }
}
