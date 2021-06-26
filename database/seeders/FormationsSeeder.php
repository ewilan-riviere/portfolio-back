<?php

namespace Database\Seeders;

use File;
use App\Models\Formation;
use App\Models\FormationLink;
use Illuminate\Database\Seeder;
use App\Enums\FormationLinkType;

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
                'slug'                     => $formationData->slug,
                'certificate'              => $formationData->certificate ?? null,
                'color'                    => $formationData->color ?? '#000000',
                'color_text_white'         => $formationData->color_text_white ?? false,
                'level'                    => $formationData->level ?? null,
                'date_begin'               => $formationData->date_begin ?? null,
                'date_end'                 => $formationData->date_end ?? null,
                'is_finished'              => $formationData->is_finished ?? false,
                'is_display'               => $formationData->is_display ?? false,
            ]);

            if (property_exists($formationData, 'title')) {
                $formation->title = [
                    'fr' => $formationData->title?->fr ?? $formationData->title,
                    'en' => $formationData->title?->en ?? $formationData->title,
                ];
                $formation->save();
            }
            if (property_exists($formationData, 'resume')) {
                $formation->resume = [
                    'fr' => $formationData->resume?->fr ?? null,
                    'en' => $formationData->resume?->en ?? null,
                ];
                $formation->save();
            }
            if (property_exists($formationData, 'description')) {
                $formation->description = [
                    'fr' => $formationData->description?->fr ?? null,
                    'en' => $formationData->description?->en ?? null,
                ];
                $formation->save();
            }

            if (property_exists($formationData, 'extra')) {
                foreach ($formationData->extra as $key => $extra) {
                    $extra = FormationLink::firstOrcreate([
                        'name'             => $extra->name ?? null,
                        'link'             => $extra->link ?? null,
                        'type'             => FormationLinkType::make($key),
                    ]);
                    $extra->formation()->associate($formation);
                    $extra->save();
                }
            }

            try {
                $logo = File::get(database_path("seeders/media/formations/$formationData->slug.svg"));
                $formation->addMediaFromString($logo)
                    ->setName($formation->slug)
                    ->setFileName($formation->slug.'.svg')
                    ->toMediaCollection('logos', 'formations');
            } catch (\Throwable $th) {
                //throw $th;
            }

            if (property_exists($formationData, 'image')) {
                try {
                    $banner = File::get(database_path("seeders/media/formations/banners/$formationData->image"));
                    $formation->addMediaFromString($banner)
                        ->setName($formationData->slug)
                        ->setFileName($formationData->image)
                        ->toMediaCollection('banners', 'formations');
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }
    }
}
