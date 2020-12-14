<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

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
                'name'      => 'Nora Hennebert',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
            [
                'name'      => 'Antoine Le Gonidec',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
            [
                'name'      => 'Hugo Schindelman',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
            [
                'name'      => 'Delphine Brunetière',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
        ];

        foreach ($developers as $key => $developer) {
            Developer::create($developer);
        }
    }
}
