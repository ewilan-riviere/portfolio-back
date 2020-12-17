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
        $imageTitle = null !== $this->image_title ? getImage($this->image_title, true) : getImage($this->image, true);

        if ($this->light) {
            $resource = [
                'slug'                                 => $this->slug,
                'title'                                => $this->title,
                'order'                                => $this->order,
                'extract'                              => $this->extract,
                'assets'                               => [
                    'image'                               => getImage($this->image, true),
                    'imageTitle'                          => $imageTitle,
                ],
            ];
        } else {
            $skills = SkillResource::collection($this->skills);
            $skills->map(function ($i) { $i->light = true; });

            $developers = DeveloperResource::collection($this->developers);
            $developers->map(function ($i) { $i->light = true; });

            $resource = [
                'slug'                                     => $this->slug,
                'title'                                    => $this->title,
                'order'                                    => $this->order,
                'extract'                                  => $this->extract,
                'description'                              => $this->description,
                'assets'                                   => [
                    'image'                               => getImage($this->image, true),
                    'imageTitle'                          => $imageTitle,
                    'font'                                => getPath($this->font, true),
                ],
                'links'                               => [
                    'github'                               => $this->link_github,
                    'project'                              => $this->link_project,
                ],
                'status'     => $this->status,
                'created_at' => $this->created_at,
                'skills'     => $skills,
                'developers' => $developers,
            ];
        }

        return $resource;
    }
}
