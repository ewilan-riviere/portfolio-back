<?php

namespace App\Providers;

use File;
use App\Models\Skill;
use InlineSvg\Collection;
use Illuminate\Http\Request;
use InlineSvg\Transformers\Cleaner;

class SvgProvider
{
    /**
     * Convert SVG with attributes.
     */
    public static function icon(
        Request $request,
        Skill $skill,
    ): string {
        $color = $request->color ?? $skill->color;
        if ($request->color) {
            $color = '#'.$color;
        }

        $hexa = str_replace('#', '', $color);
        $path = '/storage/cache/'.$skill->slug.'-'.$hexa.'.svg';
        $path_to_save = public_path($path);
        $path_url = config('app.url').$path;
        if (! File::exists($path_to_save)) {
            $icons = Collection::fromPath(pathinfo($skill->image_path)['dirname']);
            $icons->addTransformer(new Cleaner());

            $requestedIcon = $icons->get($skill->slug);
            $requestedIcon = $requestedIcon->withAttributes([
                'style'  => 'fill: '.$color,
            ]);

            File::put($path_to_save, $requestedIcon);
        }

        return $path_url;
    }
}
