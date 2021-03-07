<?php

namespace Database\Seeders;

use File;
use Carbon\Carbon;
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
        $formations = [
            [
                'title'                    => 'Licence de Psychologie',
                'certificate'              => null,
                'image'                    => 'licence-de-psychologie.svg',
                'color'                    => '#000000',
                'color_text_white'         => true,
                'resume'                   => "Une formation en psychologie orientée vers le développement de l'enfant et de l'adolescent.",
                'type'                     => 'school',
                'place'                    => 'Université de Rennes 2',
                'place_link'               => 'https://www.univ-rennes2.fr/',
                'vocational'               => null,
                'vocational_link'          => null,
                'promo'                    => 'Promo 2011',
                'promo_link'               => null,
                'level'                    => 'Bac +3',
                'date_begin'               => Carbon::parse('2011-09'),
                'date_end'                 => Carbon::parse('2014-06'),
                'is_finished'              => true,
                'is_display'               => true,
            ],
            [
                'title'                    => 'Développeuse web, web mobile',
                'certificate'              => null,
                'image'                    => 'developpeuse-web-web-mobile.svg',
                'color'                    => '#3e979b',
                'color_text_white'         => true,
                'resume'                   => "Une formation de grande qualité, lancée dans le cadre de la grande école du numérique, qui permet de se former en 8 mois aux bases et à certaines notions avancées du développement web. Donne l'équivalent de bac +2 lors de l'obtention du titre, idéal dans le cas d'une réorientation professionn elle. Basée sur l'apprentissage en auto-didacte mais guidée par des formateurs compétents qui donnent les clés pour savoir quoi rechercher pour trouver nos propres solutions. L'aspect du travail en équipe et de l'entraide est un des points les plus importants durant cette formation.",
                'type'                     => 'school',
                'place'                    => 'Code Académie',
                'place_link'               => 'http://code-academie.fr/',
                'vocational'               => null,
                'vocational_link'          => null,
                'promo'                    => 'Promo 3',
                'promo_link'               => 'http://promo03.code-academie.fr/',
                'level'                    => 'Bac +2',
                'date_begin'               => Carbon::parse('2018-09'),
                'date_end'                 => Carbon::parse('2019-05'),
                'is_finished'              => true,
                'is_display'               => true,
            ],
            [
                'title'                    => 'POEC Java',
                'certificate'              => null,
                'image'                    => 'poec-java.svg',
                'color'                    => '#004982',
                'color_text_white'         => true,
                'resume'                   => "Une préparation officielle à l'emploi collective permettant d'apprendre à développer en Java 8, partant des bases historiques et de la POO en allant jusqu'à Spring, en passant par le développement en couches. Trois mois intenses mais instructifs.",
                'type'                     => 'school',
                'place'                    => 'ENI Ecole Informatique',
                'place_link'               => 'https://www.eni-ecole.fr/',
                'vocational'               => null,
                'vocational_link'          => null,
                'promo'                    => null,
                'promo_link'               => null,
                'level'                    => 'Préparation opérationnelle à l\'emploi en Java',
                'date_begin'               => Carbon::parse('2019-06'),
                'date_end'                 => Carbon::parse('2019-09'),
                'is_finished'              => true,
                'is_display'               => true,
            ],
            [
                'title'                    => 'Conceptrice Développeuse d\'Applications',
                'certificate'              => null,
                'image'                    => 'conceptrice-developpeuse-dapplications.svg',
                'color'                    => '#4981be',
                'color_text_white'         => true,
                'resume'                   => "Une formation en alternance pour le titre de CDA. 25% de temps par mois à l'école ENI et 75% de temps à l'entreprise UseWeb. Cette entreprise réalise des sites web pour des clients, avec un front-end en NuxtJS (VueJS) et un back-end en Laravel. Mon rôle est généralement de travailler sur la partie front-end mais il m'arrive de devoir travailler également sur le back-end, ou de réaliser une application entièrement. Le plus souvent je travaille en équipe restreinte de trois personnes, je suis suivie par mon équipe pour les questions techniques et le manager pour les questions d'entreprise. L'école me forme sur plusieurs technologies : gestion de projet, gérer un serveur web, Java EE, ASP.net, cross-platform, analyse et conception, Symfony, Android. Des évaluations sont faites sur mes compétences pour obtenir le titre de conceptrice développeuse d'applications (bac+4).",
                'type'                     => 'vocational',
                'place'                    => 'Useweb',
                'place_link'               => 'https://www.useweb.fr/',
                'vocational'               => 'ENI Ecole Informatique',
                'vocational_link'          => 'https://www.eni-ecole.fr/',
                'promo'                    => null,
                'promo_link'               => null,
                'level'                    => 'Bac +4',
                'date_begin'               => Carbon::parse('2019-10'),
                'date_end'                 => Carbon::parse('2021-06'),
                'is_finished'              => false,
                'is_display'               => true,
            ],
            [
                'title'               => 'Personnel',
                'type'                => 'personal_time',
                'is_display'          => false,
            ],
            [
                'title'               => 'Useweb',
                'type'                => 'enterprise',
                'is_display'          => false,
                'date_begin'          => Carbon::parse('2019-10'),
            ],
        ];
        foreach ($formations as $key => $formationData) {
            $formation = Formation::create([
                'title'                    => array_key_exists('title', $formationData) ? $formationData['title'] : null,
                'certificate'              => array_key_exists('certificate', $formationData) ? $formationData['certificate'] : null,
                'color'                    => array_key_exists('color', $formationData) ? $formationData['color'] : '#000000',
                'color_text_white'         => array_key_exists('color_text_white', $formationData) ? $formationData['color_text_white'] : 1,
                'resume'                   => array_key_exists('resume', $formationData) ? $formationData['resume'] : null,
                'type'                     => array_key_exists('type', $formationData) ? FormationType::make($formationData['type']) : null,
                'level'                    => array_key_exists('level', $formationData) ? $formationData['level'] : null,
                'date_begin'               => array_key_exists('date_begin', $formationData) ? $formationData['date_begin'] : null,
                'date_end'                 => array_key_exists('date_end', $formationData) ? $formationData['date_end'] : null,
                'is_finished'              => array_key_exists('is_finished', $formationData) ? $formationData['is_finished'] : 1,
                'is_display'               => array_key_exists('is_display', $formationData) ? $formationData['is_display'] : false,
            ]);

            $extra = FormationExtra::firstOrcreate([
                'name'             => array_key_exists('place', $formationData) ? $formationData['place'] : null,
                'link'             => array_key_exists('place_link', $formationData) ? $formationData['place_link'] : null,
                'type'             => FormationExtraType::PLACE(),
            ]);
            $extra->formation()->associate($formation);
            $extra->save();
            $extra = FormationExtra::firstOrcreate([
                'name'             => array_key_exists('vocational', $formationData) ? $formationData['vocational'] : null,
                'link'             => array_key_exists('vocational_link', $formationData) ? $formationData['vocational_link'] : null,
                'type'             => FormationExtraType::VOCATIONAL(),
            ]);
            $extra->formation()->associate($formation);
            $extra->save();
            $extra = FormationExtra::firstOrcreate([
                'name'             => array_key_exists('promo', $formationData) ? $formationData['promo'] : null,
                'link'             => array_key_exists('promo_link', $formationData) ? $formationData['promo_link'] : null,
                'type'             => FormationExtraType::PROMO(),
            ]);
            $extra->formation()->associate($formation);
            $extra->save();

            $image = array_key_exists('image', $formationData) ? $formationData['image'] : null;
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
