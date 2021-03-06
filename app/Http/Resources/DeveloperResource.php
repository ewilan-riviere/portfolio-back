<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeveloperResource extends JsonResource
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
        $links = null;
        if ($this->links) {
            $links = [];
            foreach ($this->links as $key => $link) {
                $links[strtolower($link->type->value)] = $link->url;
            }
        }

        $projects = null;
        if ($this->projects) {
            $projects = [];
            foreach ($this->projects as $key => $project) {
                array_push($projects, [
                    'title' => $project->title,
                    'slug'  => $project->slug,
                    'role'  => $project->pivot->role,
                ]);
            }
        }

        return [
            'name'      => $this->name,
            'slug'      => $this->slug,
            'image'     => $this->image,
            'links'     => $links,
            'projects'  => sizeof($projects) > 0 ? $projects : null,
        ];
    }
}
