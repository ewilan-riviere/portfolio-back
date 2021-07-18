<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\SkillCategory $resource
 */
class SkillCategoryResource extends JsonResource
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

        return [
            'slug'   => $this->slug,
            'title'  => $this->title,
            'skills' => $skills,
        ];
    }
}
