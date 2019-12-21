<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Project;

class ProjectTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Project $project)
    {
        $attributes = $project->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        if ($project->image == null) {
            $attributes['image'] = url('storage').'/'.'projects/no-image.png';
        }

        if ($project->image != null) {
            $attributes['image'] = url('storage').'/'.$project->image;
        }

        return $attributes;
    }
}
