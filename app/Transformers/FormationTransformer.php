<?php

namespace App\Transformers;

use Carbon\Carbon;
use App\Models\Formation;
use League\Fractal\TransformerAbstract;

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

        if (null != $formation->date_begin) {
            $date = Carbon::parse($formation->date_begin, 'UTC')->locale('fr_FR');
            $attributes['date_begin'] = $date->isoFormat('MMMM YYYY');      // Jun 15th 18
        }

        if (null != $formation->date_end) {
            $date = Carbon::parse($formation->date_end, 'UTC')->locale('fr_FR');
            $attributes['date_end'] = $date->isoFormat('MMMM YYYY');      // Jun 15th 18
        }

        if (null != $formation->logo) {
            $attributes['logo'] = file_get_contents(config('app.url').'/'.$formation->logo);
        }

        if (null != $formation->project_image) {
            $attributes['project_image'] = config('app.url').'/'.$formation->project_image;
        }

        if (null != $formation->project_file) {
            $attributes['project_file'] = config('app.url').'/'.$formation->project_file;
        }

        return $attributes;
    }
}
