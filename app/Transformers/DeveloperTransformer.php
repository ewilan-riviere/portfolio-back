<?php

namespace App\Transformers;

use App\Models\Developer;
use League\Fractal\TransformerAbstract;

class DeveloperTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include.
     *
     * @var array
     */
    protected $defaultIncludes = [
    ];

    /**
     * List of resources possible to include.
     *
     * @var array
     */
    protected $availableIncludes = [
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Developer $developer)
    {
        return [
            'name' => $developer->name,
        ];
    }
}
