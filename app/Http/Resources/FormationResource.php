<?php

namespace App\Http\Resources;

use App\Providers\SvgProvider;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\Formation $resource
 */
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
        $lang = $request->lang ?? 'en';

        // $projects = null;
        // if ($this->projects) {
        //     $projects = [];
        //     foreach ($this->projects as $key => $project) {
        //         array_push($projects, [
        //             'slug'           => $project->slug,
        //             'title'          => $project->title,
        //             'resume'         => $project->resume,
        //             'isFavorite'     => $project->is_favorite,
        //             'isDisplay'      => $project->is_display,
        //             'image'          => $project->image,
        //         ]);
        //     }
        // }

        // $extras = null;
        if ($this->resource->links) {
            $links = [];
            foreach ($this->resource->links as $key => $link) {
                $links[strtolower($link->type->value)] = [
                    'name'        => $link->name,
                    'link'        => $link->link,
                ];
            }
        }

        $formation = [
            'title'              => $this->getTranslation('title', $lang),
            'slug'               => $this->slug,
            'image'              => $this->image,
            // 'certificate'       => $this->certificate,
            'logo'             => $this->logo ? SvgProvider::getIcon($request, $this->slug, $this->logo) : null,
            'resume'            => $this->getTranslation('resume', $lang),
            'description'            => $this->getTranslation('description', $lang),
            'level'             => $this->level,
            'date'              => [
                'begin'       => $this->date_begin,
                'end'         => $this->date_end,
            ],
            'isFinished'        => $this->is_finished,
            'isDisplay'         => $this->is_display,
            // 'projects'          => sizeof($projects) > 0 ? $projects : null,
            'links' => $links,
        ];

        return $formation;
    }
}
