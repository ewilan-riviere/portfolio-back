<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Formation;
use Illuminate\Database\Seeder;

class FormationsTableSeeder extends Seeder
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
                'title'            => 'Licence de Psychologie',
                'certificate'      => null,
                'logo'             => 'storage/formations/psi.svg',
                'color'            => '#000000',
                'color_text_white' => true,
                'resume'           => "Une formation en psychologie orientée vers le développement de l'enfant et de l'adolescent.",
                'type'             => 'school',
                'place'            => 'Université de Rennes 2',
                'place_link'       => 'https://www.univ-rennes2.fr/',
                'vocational'       => null,
                'vocational_link'  => null,
                'promo'            => 'Promo 2011',
                'promo_link'       => null,
                'level'            => 'Bac +3',
                'date_begin'       => Carbon::parse('2011-09'),
                'date_end'         => Carbon::parse('2014-06'),
                'project_title'    => 'TER sur la cyberviolence',
                'project_resume'   => "Ce travail avait pour but de retracer les violences qui peuvent survenir dans le domaine numérique, les formes différentes qu'elles peuvent prendre par rapport aux violences du monde physique. L'accent a été mis sur la cyberviolence subie en milieu scolaire et la manière dont elle prend le relais sur la violence classique.<br/>Ce sujet m'intéressait parce que la violence en milieu scolaire est un sujet qui a une grande importance pour moi et je souhaitais étudier la manière dont les nouvelles technologies avaient affecté ce problème, en bien comme en mal. La conclusion de ce travail d'étude et de recherche a été éclairante et enrichissante.",
                'project_image'    => null,
                'project_type'     => 'file',
                'project_link'     => null,
                'project_file'     => 'documents/ter-la-cyberviolence.pdf',
                'finished'         => true,
            ],
            [
                'title'            => 'Développeuse web, web mobile',
                'certificate'      => null,
                'logo'             => 'storage/formations/browser-web.svg',
                'color'            => '#3e979b',
                'color_text_white' => true,
                'resume'           => "Une formation de grande qualité, lancée dans le cadre de la grande école du numérique, qui permet de se former en 8 mois aux bases et à certaines notions avancées du développement web. Donne l'équivalent de bac +2 lors de l'obtention du titre, idéal dans le cas d'une réorientation professionn elle.
                <br/><br/>
                Basée sur l'apprentissage en auto-didacte mais guidée par des formateurs compétents qui donnent les clés pour savoir quoi rechercher pour trouver nos propres solutions. L'aspect du travail en équipe et de l'entraide est un des points les plus importants durant cette formation.",
                'type'            => 'school',
                'place'           => 'Code Académie',
                'place_link'      => 'http://code-academie.fr/',
                'vocational'      => null,
                'vocational_link' => null,
                'promo'           => 'Promo 3',
                'promo_link'      => 'http://promo03.code-academie.fr/',
                'level'           => 'Bac +2',
                'date_begin'      => Carbon::parse('2018-09'),
                'date_end'        => Carbon::parse('2019-05'),
                'project_title'   => 'site web de ./play.it',
                'project_resume'  => "Refonte du site web de <a href='https://www.dotslashplay.it/' target='_blank'>./play.it</a>, projet permettant de jouer plus facilement aux jeux vidéo sous Linux. Le site devait se connecter à une API déjà existante (répertoriant des scripts d'installation) et la base de données devait ajouter des informations à celles récupérées pour offrir des détails plus agréables pour les utilisateurs que seulement le titre du jeu et ses scripts.
                <br/><br/>
                Le <a href='https://dev.website.dotslashplay.it/' target='_blank'>projet</a> fut une réussite et la refonte continue encore à ce jour...",
                'project_image' => 'storage/formations/projects/play.it.png',
                'project_type'  => 'link',
                'project_link'  => 'https://dev.website.dotslashplay.it/',
                'project_file'  => null,
                'finished'      => true,
            ],
            [
                'title'            => 'POEC Java',
                'certificate'      => null,
                'logo'             => 'storage/formations/java.svg',
                'color'            => '#004982',
                'color_text_white' => true,
                'resume'           => "Une préparation officielle à l'emploi collective permettant d'apprendre à développer en Java 8, partant des bases historiques et de la POO en allant jusqu'à Spring, en passant par le développement en couches. Trois mois intenses mais instructifs.",
                'type'             => 'school',
                'place'            => 'ENI Ecole Informatique',
                'place_link'       => 'https://www.eni-ecole.fr/',
                'vocational'       => null,
                'vocational_link'  => null,
                'promo'            => null,
                'promo_link'       => null,
                'level'            => 'Préparation opérationnelle à l\'emploi en Java',
                'date_begin'       => Carbon::parse('2019-06'),
                'date_end'         => Carbon::parse('2019-09'),
                'project_title'    => null,
                'project_resume'   => null,
                'project_image'    => null,
                'project_type'     => 'link',
                'project_link'     => null,
                'project_file'     => null,
                'finished'         => true,
            ],
            [
                'title'            => 'Conceptrice Développeuse d\'Applications',
                'certificate'      => null,
                'logo'             => 'storage/formations/application.svg',
                'color'            => '#4981be',
                'color_text_white' => true,
                'resume'           => "Une formation en alternance pour le titre de CDA. 25% de temps par mois à l'école ENI et 75% de temps à l'entreprise UseWeb.
                <br/><br/>
                Cette entreprise réalise des sites web pour des clients, avec un front-end en NuxtJS (VueJS) et un back-end en Laravel. Mon rôle est généralement de travailler sur la partie front-end mais il m'arrive de devoir travailler également sur le back-end, ou de réaliser une application entièrement. Le plus souvent je travaille en équipe restreinte de trois personnes, je suis suivie par mon équipe pour les questions techniques et le manager pour les questions d'entreprise.
                <br/><br/>
                L'école me forme sur plusieurs technologies : gestion de projet, gérer un serveur web, Java EE, ASP.net, cross-platform, analyse et conception, Symfony, Android. Des évaluations sont faites sur mes compétences pour obtenir le titre de conceptrice développeuse d'applications (bac+4).",
                'type'            => 'vocational',
                'place'           => 'Useweb',
                'place_link'      => 'https://www.useweb.fr/',
                'vocational'      => 'ENI Ecole Informatique',
                'vocational_link' => 'https://www.eni-ecole.fr/',
                'promo'           => null,
                'promo_link'      => null,
                'level'           => 'Bac +4',
                'date_begin'      => Carbon::parse('2019-10'),
                'date_end'        => Carbon::parse('2021-06'),
                'project_title'   => null,
                'project_resume'  => null,
                'project_image'   => null,
                'project_type'    => 'link',
                'project_link'    => null,
                'project_file'    => null,
                'finished'        => false,
            ],
        ];
        foreach ($formations as $key => $formation) {
            Formation::create($formation);
        }
    }
}
