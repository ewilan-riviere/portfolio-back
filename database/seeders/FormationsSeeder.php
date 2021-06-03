<?php

namespace Database\Seeders;

use File;
use App\Models\Formation;
use App\Enums\FormationType;
use App\Models\FormationExtra;
use Illuminate\Database\Seeder;
use App\Enums\FormationExtraType;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formations = json_decode(File::get(database_path('seeders/data/formations.json')));

        foreach ($formations as $key => $formationData) {
            $formation = Formation::create([
                'title'                    => $formationData->title ?? null,
                'certificate'              => $formationData->certificate ?? null,
                'color'                    => $formationData->color ?? '#000000',
                'color_text_white'         => $formationData->color_text_white ?? false,
                'resume'                   => $formationData->resume ?? null,
                'type'                     => $formationData->type ?? null, // $formationData) ? FormationType::make($formationData['type']) : null,
                'level'                    => $formationData->level ?? null,
                'date_begin'               => $formationData->date_begin ?? null,
                'date_end'                 => $formationData->date_end ?? null,
                'is_finished'              => $formationData->is_finished ?? false,
                'is_display'               => $formationData->is_display ?? false,
            ]);

            $extra = FormationExtra::firstOrcreate([
                'name'             => $formationData->place ?? null,
                'link'             => $formationData->place_link ?? null,
                'type'             => FormationExtraType::PLACE(),
            ]);
            $extra->formation()->associate($formation);
            $extra->save();
            $extra = FormationExtra::firstOrcreate([
                'name'             => $formationData->vocational ?? null,
                'link'             => $formationData->vocational_link ?? null,
                'type'             => FormationExtraType::VOCATIONAL(),
            ]);
            $extra->formation()->associate($formation);
            $extra->save();
            $extra = FormationExtra::firstOrcreate([
                'name'             => $formationData->promo ?? null,
                'link'             => $formationData->promo_link ?? null,
                'type'             => FormationExtraType::PROMO(),
            ]);
            $extra->formation()->associate($formation);
            $extra->save();

            $image = $formationData->image ?? null;
            try {
                $image = File::get(database_path("seeders/media/formations/$image"));
            } catch (\Throwable $th) {
                //throw $th;
            }
            if ($image) {
                $formation->addMediaFromString($image)
                    ->setName($formation->slug)
                    ->setFileName($formation->slug.'.svg')
                    ->toMediaCollection('formations', 'formations');
            }
        }
    }
}
