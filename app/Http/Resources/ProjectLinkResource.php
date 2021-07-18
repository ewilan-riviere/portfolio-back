<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\ProjectLink $resource
 */
class ProjectLinkResource extends JsonResource
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
        return [
            'back_repository'  => $this->back_repository,
            'back_project'     => $this->back_project,
            'front_repository' => $this->front_repository,
            'front_project'    => $this->front_project,
            'app_repository'   => $this->app_repository,
            'app_project'      => $this->app_project,
        ];
    }
}
