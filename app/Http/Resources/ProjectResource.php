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
        if ($this->developers) {
            $developers = [];
            foreach ($this->developers as $key => $developer) {
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

        $links = null;
        if ($this->links) {
            $links = [];
            foreach ($this->links as $key => $link) {
                $links[strtolower($link->type->value)] = [
                    'repository' => $this->is_private ? null : $link->repository,
                    'project'    => $link->project,
                    'type'       => ProjectLinkType::getTranslation($lang, strtolower($link->type)),
                ];
            }
        }
        ksort($links);

        $status = null;
        if ($this->status) {
            $status = [
                'name'  => $this->status->getTranslation('name', $lang),
                'order' => $this->status->order,
            ];
        }

        return array_merge([
            'meta' => [
                'slug'                                       => $this->slug,
            ],
            'title'                                              => $this->title,
            'subtitle'                                           => $this->getTranslation('subtitle', $lang),
            'order'                                              => $this->order,
            'abstract'                                           => $this->getTranslation('abstract', $lang),
            'description'                                        => $this->getTranslation('description', $lang),
            'status'                                             => $status,
            'experience'                                         => $this->experience->getTranslation('title', $lang) ?? null,
            'date'                                               => $this->created_at,
            'formation'                                          => $this->formation ? [
                'title' => $this->formation->title,
                'slug'  => $this->formation->slug,
            ] : null,
            'skills'                                 => sizeof($skills) > 0 ? $skills : null,
            'developers'                             => sizeof($developers) > 0 ? $developers : null,
            'picture'                                => [
                'logo'                                   => $this->picture_logo,
                'color'                                  => $this->color,
                'title'                                  => $this->picture_title,
                'banner'                                 => $this->picture_banner,
                'gallery'                                => $this->gallery,
            ],
            'isFavorite' => $this->is_favorite,
        ], [
            'links'      => $links,
        ]);
    }
}
