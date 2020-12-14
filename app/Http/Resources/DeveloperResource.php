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
        $result = [
            'name'      => $this->name,
            'slug'      => $this->slug,
            'github'    => $this->github,
            'portfolio' => $this->portfolio,
            'linkedin'  => $this->linkedin,
            'role'      => $this->pivot->role,
        ];

        if ($this->light) {
            $result = [
                'name' => $this->name,
                'role' => $this->pivot->role,
            ];
        }

        return $result;
    }
}
