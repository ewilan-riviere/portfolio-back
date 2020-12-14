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
        $skills = SkillResource::collection($this->skills);
        $skills->map(function ($i) { $i->light = true; });

        $developers = DeveloperResource::collection($this->developers);
        $developers->map(function ($i) { $i->light = true; });

        return [
            'slug'                                => $this->slug,
            'title'                               => $this->title,
            'order'                               => $this->order,
            'resume'                              => $this->resume,
            'assets'                              => [
                'image'                               => getImage($this->image),
                'imageTitle'                          => getImage($this->image_title),
                'font'                                => getPath($this->font),
            ],
            'links'                               => [
                'github'                               => $this->link_github,
                'project'                              => $this->link_project,
            ],
            'skills'     => $skills,
            'developers' => $developers,
        ];
    }
}
