<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class ProjectMemberTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform()
    {
        $attributes = $project->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        return $attributes;
    }
}
