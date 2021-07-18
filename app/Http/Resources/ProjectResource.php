<?php

namespace App\Http\Resources;

use App\Models\Enums\ProjectLinkType;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\Project $resource
 */
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
        $lang = $request->lang ?? 'en';

        $developers = null;
        if ($this->resource->developers) {
            $developers = [];
            foreach ($this->resource->developers as $key => $developer) {
                array_push($developers, [
                    'name'  => $developer->name,
                    'slug'  => $developer->slug,
                    'image' => $developer->image,
                    'role'  => $developer->pivot->role,
                    'link'  => [
                        'type' => $developer->primaryLink->type,
                        'url'  => $developer->primaryLink->url,
                    ],
                ]);
            }
        }

        $skills = null;
        if ($this->resource->skills) {
            $skills = [];
            foreach ($this->resource->skills as $key => $skill) {
                array_push($skills, [
                    'title' => $skill->title,
                    'slug'  => $skill->slug,
                    'color' => $skill->color,
                ]);
            }
        }

        $links = null;
        if ($this->resource->links) {
            $links = [];
            foreach ($this->resource->links as $key => $link) {
                $links[strtolower($link->type->value)] = [
                    'repository' => $this->resource->is_private ? null : $link->repository,
                    'project'    => $link->project,
                    'type'       => ProjectLinkType::getTranslation($lang, strtolower($link->type)),
                ];
            }
        }
        ksort($links);

        $status = null;
        if ($this->resource->status) {
            $status = [
                'name'  => $this->resource->status->getTranslation('name', $lang),
                'order' => $this->resource->status->order,
            ];
        }

        return array_merge([
            'meta' => [
                'slug'                                       => $this->resource->slug,
            ],
            'title'                                              => $this->resource->title,
            'subtitle'                                           => $this->resource->getTranslation('subtitle', $lang),
            'order'                                              => $this->resource->order,
            'abstract'                                           => $this->resource->getTranslation('abstract', $lang),
            'description'                                        => $this->resource->getTranslation('description', $lang),
            'status'                                             => $status,
            'experience'                                         => $this->resource->experience->getTranslation('title', $lang) ?? null,
            'date'                                               => $this->resource->created_at,
            'formation'                                          => $this->resource->formation ? [
                'title' => $this->resource->formation->title,
                'slug'  => $this->resource->formation->slug,
            ] : null,
            'skills'                                 => sizeof($skills) > 0 ? $skills : null,
            'developers'                             => sizeof($developers) > 0 ? $developers : null,
            'picture'                                => [
                'logo'                                   => $this->resource->picture_logo,
                'color'                                  => $this->resource->color,
                'title'                                  => $this->resource->picture_title,
                'banner'                                 => $this->resource->picture_banner,
                'gallery'                                => $this->resource->gallery,
            ],
            'isFavorite' => $this->resource->is_favorite,
            'isPrivate'  => $this->resource->is_private,
        ], [
            'links'      => $links,
        ]);
    }
}
