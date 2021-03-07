<?php

namespace Database\Seeders;

use File;
use App\Models\Developer;
use App\Models\DeveloperLink;
use Illuminate\Database\Seeder;
use App\Enums\DeveloperLinkType;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developers = [
            [
                'name'      => 'Ewilan Rivière',
                'links'     => [
                    'github'    => [
                        'https://github.com/ewilan-riviere',
                        true,
                    ],
                    'portfolio' => 'https://ewilan-riviere.com',
                    'linkedin'  => 'https://www.linkedin.com/in/ewilan-riviere',
                    'gitlab'    => 'https://gitlab.com/ewilan-riviere',
                    'bit'       => 'https://bit.dev/ewilan-riviere',
                    'twitter'   => 'https://twitter.com/ewilanriviere',
                    'mail'      => 'mailto:contact@ewilan-riviere.com',
                ],
            ],
            [
                'name'      => 'Nora Hennebert',
                'links'     => [
                    'github'    => 'https://github.com/Norahenn',
                    'linkedin'  => [
                        'https://www.linkedin.com/in/nora-hennebert',
                        true,
                    ],
                    'gitlab'    => 'https://gitlab.com/Norahenn',
                ],
            ],
            [
                'name'      => 'Antoine Le Gonidec',
                'links'     => [
                    'github'    => 'https://github.com/vv221',
                    'git'       => [
                        'https://forge.dotslashplay.it/vv221',
                        true,
                    ],
                ],
            ],
            [
                'name'      => 'Hugo Schindelman',
                'links'     => [
                    'linkedin'  => [
                        'https://www.linkedin.com/in/hugo-schindelman',
                        true,
                    ],
                    'gitlab'    => 'https://gitlab.com/Felonius',
                ],
            ],
            [
                'name'      => 'Delphine Brunetière',
                'links'     => [
                    'portfolio' => 'https://delphinebrunetiere.com',
                    'linkedin'  => [
                        'https://www.linkedin.com/in/delphinebrunetiere',
                        true,
                    ],
                    'gitlab'    => 'https://gitlab.com/dearflynn',
                    'twitter'   => 'https://twitter.com/D_Brunetiere',
                    'medium'    => 'https://delphinebrunetiere.medium.com',
                ],
            ],
        ];

        foreach ($developers as $key => $developerRaw) {
            $developer = Developer::create([
                'name' => $developerRaw['name'],
            ]);

            foreach ($developerRaw['links'] as $key => $linkRaw) {
                $linkRaw_url = is_array($linkRaw) ? $linkRaw[0] : $linkRaw;
                $link = DeveloperLink::create([
                    'type'       => DeveloperLinkType::make($key),
                    'url'        => $linkRaw_url,
                    'is_primary' => is_array($linkRaw),
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
