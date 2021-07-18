<?php

namespace Database\Seeders;

use File;
use App\Models\Developer;
use App\Models\DeveloperLink;
use Illuminate\Database\Seeder;
use App\Models\Enums\DeveloperLinkType;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developers = json_decode(File::get(database_path('seeders/data/developers.json')));

        foreach ($developers as $key => $developerRaw) {
            $developer = Developer::create([
                'name' => $developerRaw->name,
            ]);

            foreach ($developerRaw->links as $key => $linkRaw) {
                $linkRaw_url = is_string($linkRaw) ? $linkRaw : $linkRaw->url;
                $link = DeveloperLink::create([
                    'type'       => DeveloperLinkType::make($key),
                    'url'        => $linkRaw_url,
                    'is_primary' => $linkRaw->is_primary ?? false,
                ]);
                $link->developer()->associate($developer);
                $link->save();
            }

            $image = null;
            try {
                $image = File::get(database_path("seeders/media/developers/$developer->slug.webp"));
            } catch (\Throwable $th) {
                //throw $th;
            }
            if ($image) {
                $developer->addMediaFromString($image)
                    ->setName($developer->slug)
                    ->setFileName($developer->slug.'.webp')
                    ->toMediaCollection('developers', 'developers');
            }
        }
    }
}
