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
        $projects = null;
        if ($this->projects) {
            $projects = [];
            foreach ($this->projects as $key => $project) {
                array_push($projects, [
                    'slug'           => $project->slug,
                    'title'          => $project->title,
                    'resume'         => $project->resume,
                    'isFavorite'     => $project->is_favorite,
                    'isDisplay'      => $project->is_display,
                    'image'          => $project->image,
                ]);
            }
        }

        $extras = null;
        if ($this->extras) {
            $extras = [];
            foreach ($this->extras as $key => $extra) {
                $extras[strtolower($extra->type->value)] = [
                    'name'        => $extra->name,
                    'link'        => $extra->link,
                ];
            }
        }

        $formation = [
            'title'             => $this->title,
            'slug'              => $this->slug,
            'certificate'       => $this->certificate,
            'image'             => file_get_contents($this->image),
            'color'             => $this->color,
            'colorTextWhite'    => $this->color_text_white,
            'resume'            => $this->resume,
            'date'              => [
                'begin'       => $this->date_begin,
                'end'         => $this->date_end,
            ],
            'isFinished'        => $this->is_finished,
            'isDisplay'         => $this->is_display,
            'projects'          => sizeof($projects) > 0 ? $projects : null,
        ];
        $formation = array_merge($formation, $extras);

        return $formation;
    }
}
