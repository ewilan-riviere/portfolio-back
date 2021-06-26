<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\FormationLink $resource
 */
class FormationLinkResource extends JsonResource
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
        // $this->resource->type
        return [
            'name' => $this->resource->name,
            'link' => $this->resource->link,
        ];
    }
}
