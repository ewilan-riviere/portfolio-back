<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title'               => 'Zergling Evolution',
                'order'               => 8,
                'image'               => 'storage/projects/zergling-evolution.png',
                'image_title'         => 'storage/projects/zergling-evolution-title.png',
                'resume'              => 'Aidez Ling, le Zergling, à manger de vilains Terrans pour gagner des points dans ce jeu adapté du célèbre Cookie Clicker ! Collectionnez les bonus organiques proposés par Abathur !',
                'link_github'         => 'https://github.com/ewilan-riviere/zergling-evolution',
                'link_project'        => null,
                'font'                => 'storage/fonts/starcraft-normal.ttf',
                'formation_slug'      => 'developpeuse-web-web-mobile',
                'created_at'          => '2018-11-07',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'Overwatch Memory',
                'order'               => 4,
                'image'               => 'storage/projects/overwatch-memory.png',
                'image_title'         => 'storage/projects/overwatch-memory-title.png',
                'resume'              => 'Retrouvez vos héros favoris dans ce jeu de Memory basé sur l\'univers d\'Overwatch, battez des records pour retrouver toutes les cartes !',
                'link_github'         => 'https://github.com/ewilan-riviere/overwatch-memory',
                'link_project'        => null,
                'font'                => 'storage/fonts/big-noodle-titling.ttf',
                'status'              => 'published',
                'formation_slug'      => 'developpeuse-web-web-mobile',
                'created_at'          => '2018-11-07',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'Pomodoro',
                'order'               => 6,
                'image'               => 'storage/projects/pomodoro.png',
                'image_title'         => 'storage/projects/pomodoro-title.png',
                'resume'              => 'Travaillez en toute sérénité en prenant soin de vous reposer de façon régulière grâce à ce mignon petit minuteur qui vous aidera à maîtriser votre temps en douceur.',
                'link_github'         => 'https://github.com/ewilan-riviere/pomodoro',
                'link_project'        => null,
                'font'                => 'storage/fonts/permanent-marker-regular.ttf',
                'status'              => 'published',
                'formation_slug'      => 'developpeuse-web-web-mobile',
                'created_at'          => '2018-11-28',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'Quizz Pokémon',
                'order'               => 5,
                'image'               => 'storage/projects/quizz-pokemon.png',
                'image_title'         => 'storage/projects/quizz-pokemon-title.png',
                'resume'              => 'Traversez les épreuves de ce quiz pokémon qui vous interrogera sur les subtilités de cette licence vidéoludique, autant sur les jeu que les animes.',
                'link_github'         => 'https://github.com/ewilan-riviere/quizz-pokemon',
                'link_project'        => null,
                'font'                => 'storage/fonts/pokemon-solid.ttf',
                'status'              => 'published',
                'formation_slug'      => 'developpeuse-web-web-mobile',
                'created_at'          => '2018-12-06',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'Fantasy Battle',
                'order'               => 7,
                'image'               => 'storage/projects/fantasy-battle.png',
                'image_title'         => 'storage/projects/fantasy-battle-title.png',
                'resume'              => 'Combattez avec les personnages tirés de célèbres licences de jeu vidéo.',
                'link_github'         => 'https://github.com/ewilan-riviere/fantasy-battle',
                'link_project'        => null,
                'font'                => 'storage/fonts/triforce.ttf',
                'formation_slug'      => 'developpeuse-web-web-mobile',
                'created_at'          => '2019-02-07',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'Site web de ./play.it',
                'order'               => 2,
                'image'               => 'storage/projects/play.it.png',
                'image_title'         => null,
                'resume'              => 'Refonte du site de ./play.it, projet permettant de jouer facilement aux jeux vidéo sous Linux.',
                'link_github'         => 'https://forge.dotslashplay.it/play.it/website',
                'link_project'        => 'https://dev.website.dotslashplay.it/',
                'font'                => 'storage/fonts/source-code-pro-regular.ttf',
                'status'              => 'published',
                'formation_slug'      => 'developpeuse-web-web-mobile',
                'created_at'          => '2019-04-01',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'Promo #03 · Code Académie',
                'order'               => 3,
                'image'               => 'storage/projects/code-academie.png',
                'image_title'         => null,
                'resume'              => 'Création du site de la promo #03 de la Code Académie avec une équipe de passionnés.',
                'link_github'         => 'https://gitlab.com/code-academie/promo-03/apprenants/site-promo-3',
                'link_project'        => 'http://promo03.code-academie.fr/',
                'font'                => 'storage/fonts/kraftstoff-regular.otf',
                'status'              => 'published',
                'formation_slug'      => 'developpeuse-web-web-mobile',
                'created_at'          => '2018-11-27',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'Portfolio',
                'order'               => 1,
                'image'               => 'storage/projects/portfolio.png',
                'image_title'         => null,
                'resume'              => 'Réalisation de mon portfolio.',
                'link_github'         => 'https://github.com/ewilan-riviere/ewilan-riviere-portfolio-front',
                'link_project'        => 'https://portfolio.ewilan-riviere.com/',
                'font'                => 'storage/fonts/morpheus.ttf',
                'status'              => 'published',
                'created_at'          => '2020-05-19',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'               => 'TER sur la cyberviolence',
                'order'               => 1,
                'image'               => 'storage/projects/portfolio.png',
                'image_title'         => null,
                'resume'              => "Ce travail avait pour but de retracer les violences qui peuvent survenir dans le domaine numérique, les formes différentes qu'elles peuvent prendre par rapport aux violences du monde physique. L'accent a été mis sur la cyberviolence subie en milieu scolaire et la manière dont elle prend le relais sur la violence classique.<br/>Ce sujet m'intéressait parce que la violence en milieu scolaire est un sujet qui a une grande importance pour moi et je souhaitais étudier la manière dont les nouvelles technologies avaient affecté ce problème, en bien comme en mal. La conclusion de ce travail d'étude et de recherche a été éclairante et enrichissante.",
                'link_project'        => getPath('storage/documents/ter-la-cyberviolence.pdf'),
                'status'              => 'published',
                'formation_slug'      => 'licence-de-psychologie',
                'created_at'          => '2014-06-01',
                'updated_at'          => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        foreach ($projects as $key => $project) {
            Project::create($project);
        }
    }
}
