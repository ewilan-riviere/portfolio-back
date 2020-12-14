<?php

namespace App\Transformers;

use App\Models\Project;
use League\Fractal\TransformerAbstract;

class ProjectTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include.
     *
     * @var array
     */
    protected $availableIncludes = [
        'skills',
        'developers',
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Project $project)
    {
        // unset(
        //     $attributes['id'],
        //     $attributes['created_at'],
        //     $attributes['updated_at']
        // );

        // $imageTitle = storage_path('app/public/'.$project->image);
        // $imageTitleNoExtension = basename($imageTitle, '.png');
        // if (file_exists(storage_path('app/public/projects/'.$imageTitleNoExtension.'-title.png'))) {
        //     $attributes['image-title'] = url('storage').'/'.$imageTitleNoExtension.'-title.png';
        // }

        // if (null == $project->image) {
        //     $attributes['image'] = url('storage').'/'.'projects/no-image.png';
        // }

        // if (null != $project->image) {
        //     $attributes['image'] = ;
        // }

        // if (null != $project->font) {
        //     $attributes['font'] = config('app.url').'/'.$project->font;
        // }

        // return $attributes;

        return [
            'slug'                                => $project->slug,
            'title'                               => $project->title,
            'order'                               => $project->order,
            'resume'                              => $project->resume,
            'assets'                              => [
                'image'                               => getImage($project->image),
                'imageTitle'                          => getImage($project->image_title),
                'font'                                => getPath($project->font),
            ],
            'links'                               => [
                'github'                               => $project->link_github,
                'project'                              => $project->link_project,
            ],
        ];
    }

    public function includeSkills(Project $project)
    {
        return $this->collection($project->skills, new SkillTransformer());
    }

    public function includeDevelopers(Project $project)
    {
        return $this->collection($project->developers, new DeveloperTransformer());
    }
}
