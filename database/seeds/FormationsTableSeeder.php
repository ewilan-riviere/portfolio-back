<?php

use Illuminate\Database\Seeder;

use App\Models\Formation;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formation::insert([
            [
                'title' => 'Licence de Psychologie',
                'title_link' => null,
                'logo' => 'image/logo/psi.svg',
                'place' => 'Université de Rennes 2',
                'place_link' => 'https://www.univ-rennes2.fr/',
                'promo' => null,
                'promo_link' => null,
                'level' => 3,
                'date_begin' => '2011',
                'date_end' => '2014',
                'project' => 'TER sur la cyberviolence',
                'project_link' => 'documents/ter-la-cyberviolence.pdf',
            ],
            [
                'title' => 'Développeuse web, web mobile',
                'title_link' => null,
                'logo' => null,
                'place' => 'Code Académie (FACE Rennes)',
                'place_link' => 'http://code-academie.fr/',
                'promo' => 'Promo 3',
                'promo_link' => 'http://promo03.code-academie.fr/',
                'level' => 2,
                'date_begin' => '2018',
                'date_end' => '2019',
                'project' => 'site web de ./play.it',
                'project_link' => 'https://dev.website.dotslashplay.it/',
            ],
            [
                'title' => 'POEC Java',
                'title_link' => null,
                'logo' => null,
                'place' => 'ENI Ecole Informatique',
                'place_link' => 'https://www.eni-ecole.fr/',
                'promo' => null,
                'promo_link' => null,
                'level' => null,
                'date_begin' => '2019',
                'date_end' => '2019',
                'project' => null,
                'project_link' => null,
            ],
        ]);
    }
}
