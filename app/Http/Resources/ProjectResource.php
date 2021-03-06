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
        $developers = null;
        if ($this->developers) {
            $developers = [];
            foreach ($this->developers as $key => $developer) {
                array_push($developers, [
                    'name'  => $developer->name,
                    'slug'  => $developer->slug,
                    'image' => $developer->image,
                    'link'  => [
                        'type' => $developer->primaryLink->type,
                        'url'  => $developer->primaryLink->url,
                    ],
                ]);
            }
        }

        $skills = null;
        if ($this->skills) {
            $skills = [];
            foreach ($this->skills as $key => $skill) {
                array_push($skills, [
                    'title' => $skill->title,
                    'slug'  => $skill->slug,
                    'color' => $skill->color,
                ]);
            }
        }

        $projectLinks = null;
        if ($this->projectLinks) {
            $projectLinks = [];
            foreach ($this->projectLinks as $key => $link) {
                $projectLinks[strtolower($link->type->value)] = [
                    'repository' => $link->is_private ? null : $link->repository,
                    'project'    => $link->project,
                ];
            }
        }

        return array_merge([
            'slug'                                     => $this->slug,
            'title'                                    => $this->title,
            'order'                                    => $this->order,
            'description'                              => $this->description,
            'createdAt'                                => $this->created_at,
            'formation'                                => $this->formation ? [
                'title' => $this->formation->title,
                'slug'  => $this->formation->slug,
            ] : null,
            'skills'                               => sizeof($skills) > 0 ? $skills : null,
            'developers'                           => sizeof($developers) > 0 ? $developers : null,
            'assets'                               => [
                'image'                               => $this->image,
                'imageTitle'                          => $this->image_title,
            ],
            'isFavorite' => $this->is_favorite,
        ], $projectLinks);
    }
}
