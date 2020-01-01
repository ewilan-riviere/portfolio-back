<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\Formation;
use Carbon\Carbon;

class FormationTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Formation $formation)
    {
        $attributes = $formation->toArray();

        unset(
            $attributes['id'],
            $attributes['created_at'],
            $attributes['updated_at']
        );

        if ($formation->date_begin != null) {
            $date = Carbon::parse($formation->date_begin, 'UTC')->locale('fr_FR');
            $attributes['date_begin'] = $date->isoFormat('MMMM YYYY');      // Jun 15th 18
        }

        if ($formation->date_end != null) {
            $date = Carbon::parse($formation->date_end, 'UTC')->locale('fr_FR');
            $attributes['date_end'] = $date->isoFormat('MMMM YYYY');      // Jun 15th 18
        }

        if ($formation->logo != null) {
            $attributes['logo'] = config('app.url').'/'.$formation->logo;
        }

        if ($formation->project_file != null) {
            $attributes['project_file'] = config('app.url').'/'.$formation->project_file;
        }

        return $attributes;
    }
}
