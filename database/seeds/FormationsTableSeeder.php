<?php

use Illuminate\Database\Seeder;

use App\Models\Formation;
use Carbon\Carbon;

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
                'certificate' => null,
                'logo' => 'storage/formations/rennes-2.svg',
                'resume' => '',
                'type' => 'school',
                'place' => 'Université de Rennes 2',
                'place_link' => 'https://www.univ-rennes2.fr/',
                'vocational_title' => null,
                'vocational_link' => null,
                'promo' => 'Promo 2011',
                'promo_link' => null,
                'level' => 'Bac +3',
                'date_begin' => Carbon::parse('2011-09'),
                'date_end' => Carbon::parse('2014-06'),
                'project_title' => 'TER sur la cyberviolence',
                'project_resume' => null,
                'project_type' => 'file',
                'project_link' => null,
                'project_file' => 'documents/ter-la-cyberviolence.pdf',
                'finished' => true
            ],
            [
                'title' => 'Développeuse web, web mobile',
                'certificate' => null,
                'logo' => 'storage/formations/code-academie.png',
                'resume' => '',
                'type' => 'school',
                'place' => 'Code Académie (FACE Rennes)',
                'place_link' => 'http://code-academie.fr/',
                'vocational_title' => null,
                'vocational_link' => null,
                'promo' => 'Promo 3',
                'promo_link' => 'http://promo03.code-academie.fr/',
                'level' => 'Bac +2',
                'date_begin' => Carbon::parse('2018-09'),
                'date_end' => Carbon::parse('2019-05'),
                'project_title' => 'site web de ./play.it',
                'project_resume' => null,
                'project_type' => 'link',
                'project_link' => 'https://dev.website.dotslashplay.it/',
                'project_file' => null,
                'finished' => true
            ],
            [
                'title' => 'POEC Java',
                'certificate' => null,
                'logo' => 'storage/formations/eni.svg',
                'resume' => '',
                'type' => 'school',
                'place' => 'ENI Ecole Informatique',
                'place_link' => 'https://www.eni-ecole.fr/',
                'vocational_title' => null,
                'vocational_link' => null,
                'promo' => null,
                'promo_link' => null,
                'level' => 'Préparation opérationnelle à l\'emploi en Java',
                'date_begin' => Carbon::parse('2019-06'),
                'date_end' => Carbon::parse('2019-09'),
                'project_title' => null,
                'project_resume' => null,
                'project_type' => 'link',
                'project_link' => null,
                'project_file' => null,
                'finished' => true
            ],
            [
                'title' => 'Conceptrice Développeuse d\'Applications (alternance)',
                'certificate' => null,
                'logo' => 'storage/formations/alternance.png',
                'resume' => '',
                'type' => 'vocational',
                'place' => 'ENI Ecole Informatique',
                'place_link' => 'https://www.eni-ecole.fr/',
                'vocational_title' => 'UseWeb',
                'vocational_link' => 'https://www.useweb.fr/',
                'promo' => null,
                'promo_link' => null,
                'level' => 'Bac +4',
                'date_begin' => Carbon::parse('2019-10'),
                'date_end' => Carbon::parse('2021-06'),
                'project_title' => null,
                'project_resume' => null,
                'project_type' => 'link',
                'project_link' => null,
                'project_file' => null,
                'finished' => false
            ],
        ]);
    }
}
