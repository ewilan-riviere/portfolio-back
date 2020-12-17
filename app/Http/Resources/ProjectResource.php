<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
        if ($this->light) {
            $resource = [
                'slug'                                 => $this->slug,
                'title'                                => $this->title,
                'order'                                => $this->order,
                'extract'                              => $this->extract,
                'assets'                               => [
                    'image'                               => getImage($this->image, true),
                    'imageTitle'                          => getImage($this->image_title, true),
                ],
            ];
        } else {
            $skills = SkillResource::collection($this->skills);
            $skills->map(function ($i) { $i->light = true; });

            $developers = DeveloperResource::collection($this->developers);
            $developers->map(function ($i) { $i->light = true; });

            $formation = (new FormationResource($this->formation))->additional(['forProject' => true]);

            $resource = [
                'slug'                                     => $this->slug,
                'title'                                    => $this->title,
                'order'                                    => $this->order,
                'extract'                                  => $this->extract,
                'description'                              => $this->description,
                'assets'                                   => [
                    'image'                               => getImage($this->image, true),
                    'imageTitle'                          => getImage($this->image_title, true),
                    'font'                                => getPath($this->font, true),
                ],
                'links'                               => [
                    'repository'                               => $this->link_repository,
                    'project'                                  => $this->link_project,
                ],
                'status'      => $this->status,
                'createdAt'   => $this->created_at,
                'projectType' => $formation,
                'skills'      => $skills,
                'developers'  => $developers,
            ];
        }

        return $resource;
    }
}
