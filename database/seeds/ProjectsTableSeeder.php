<?php

use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::insert([
            [
                'title' => 'Zergling Evolution',
                'image' => 'projects/zergling-evolution.png',
                'resume' => 'Aidez Ling, le Zergling, à manger de vilains Terrans pour gagner des points dans ce jeu adapté du célèbre Cookie Clicker ! Collectionnez les bonus organiques proposés par Abathur !',
                'github_link' => 'https://github.com/ewilan-riviere/zergling-evolution',
                'try_it' => null,
            ],
            [
                'title' => 'Overwatch Memory',
                'image' => 'projects/overwatch-memory.png',
                'resume' => 'Retrouvez vos héros favoris dans ce jeu de Memory basé sur l\'univers d\'Overwatch, battez des records pour retrouver toutes les cartes !',
                'github_link' => 'https://github.com/ewilan-riviere/overwatch-memory',
                'try_it' => null,
            ],
            [
                'title' => 'Pomodoro',
                'image' => 'projects/pomodoro.png',
                'resume' => 'Travaillez en toute sérénité en prenant soin de vous reposer de façon régulière grâce à ce mignon petit minuteur qui vous aidera à maîtriser votre temps en douceur.',
                'github_link' => 'https://github.com/ewilan-riviere/pomodoro',
                'try_it' => null,
            ],
            [
                'title' => 'Quizz Pokémon',
                'image' => 'projects/quizz-pokemon.png',
                'resume' => 'Traversez les épreuves de ce quiz pokémon qui vous interrogera sur les subtilités de cette licence vidéoludique, autant sur les jeu que les animes.',
                'github_link' => 'https://github.com/ewilan-riviere/quizz-pokemon',
                'try_it' => null,
            ],
            [
                'title' => 'Fantasy Battle',
                'image' => 'projects/fantasy-battle.png',
                'resume' => 'Combattez avec les personnages tirés de célèbres licences de jeu vidéo.',
                'github_link' => 'https://github.com/ewilan-riviere/fantasy-battle',
                'try_it' => null,
            ],
            // [
            //     'title' => 'Hackathon',
            //     'image' => 'projects/hackathon.png',
            //     'resume' => 'Participation au Hackathon organisé entre l\'Epitha et la Code Académie en avril 2019.',
            //     'github_link' => null,
            //     'try_it' => 'http://hackathon.code-academie.fr/',
            // ],
            [
                'title' => './play.it',
                'image' => 'projects/play.it.png',
                'resume' => 'Refonte du site de ./play.it, projet permettant de jouer facilement aux jeux vidéo sous Linux.',
                'github_link' => 'https://forge.dotslashplay.it/play.it/website',
                'try_it' => 'https://forge.dotslashplay.it/play.it/website',
            ],
            [
                'title' => 'Promo #03 · Code Académie',
                'image' => 'projects/code-academie.png',
                'resume' => 'Création du site de la promo #03 de la Code Académie avec une équipe de passionnés.',
                'github_link' => 'https://gitlab.com/code-academie/promo-03/apprenants/site-promo-3',
                'try_it' => 'http://promo03.code-academie.fr/',
            ],
            [
                'title' => 'Portfolio',
                'image' => 'projects/portfolio.png',
                'resume' => 'Réalisation de mon portfolio.',
                'github_link' => 'https://github.com/ewilan-riviere/ewilan-riviere-portfolio-front',
                'try_it' => 'https://ewilan-riviere.tech/',
            ],
        ]);
    }
}
