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
                'image' => 'storage/projects/zergling-evolution.png',
                'image-title' => 'storage/projects/zergling-evolution-title.png',
                'resume' => 'Aidez Ling, le Zergling, à manger de vilains Terrans pour gagner des points dans ce jeu adapté du célèbre Cookie Clicker ! Collectionnez les bonus organiques proposés par Abathur !',
                'github_link' => 'https://github.com/ewilan-riviere/zergling-evolution',
                'try_it' => null,
            ],
            [
                'title' => 'Overwatch Memory',
                'image' => 'storage/projects/overwatch-memory.png',
                'image-title' => 'storage/projects/overwatch-memory-title.png',
                'resume' => 'Retrouvez vos héros favoris dans ce jeu de Memory basé sur l\'univers d\'Overwatch, battez des records pour retrouver toutes les cartes !',
                'github_link' => 'https://github.com/ewilan-riviere/overwatch-memory',
                'try_it' => null,
            ],
            [
                'title' => 'Pomodoro',
                'image' => 'storage/projects/pomodoro.png',
                'image-title' => 'storage/projects/pomodoro-title.png',
                'resume' => 'Travaillez en toute sérénité en prenant soin de vous reposer de façon régulière grâce à ce mignon petit minuteur qui vous aidera à maîtriser votre temps en douceur.',
                'github_link' => 'https://github.com/ewilan-riviere/pomodoro',
                'try_it' => null,
            ],
            [
                'title' => 'Quizz Pokémon',
                'image' => 'storage/projects/quizz-pokemon.png',
                'image-title' => 'storage/projects/quizz-pokemon-title.png',
                'resume' => 'Traversez les épreuves de ce quiz pokémon qui vous interrogera sur les subtilités de cette licence vidéoludique, autant sur les jeu que les animes.',
                'github_link' => 'https://github.com/ewilan-riviere/quizz-pokemon',
                'try_it' => null,
            ],
            [
                'title' => 'Fantasy Battle',
                'image' => 'storage/projects/fantasy-battle.png',
                'image-title' => 'storage/projects/fantasy-battle-title.png',
                'resume' => 'Combattez avec les personnages tirés de célèbres licences de jeu vidéo.',
                'github_link' => 'https://github.com/ewilan-riviere/fantasy-battle',
                'try_it' => null,
            ],
            [
                'title' => './play.it',
                'image' => 'storage/projects/play.it.png',
                'image-title' => null,
                'resume' => 'Refonte du site de ./play.it, projet permettant de jouer facilement aux jeux vidéo sous Linux.',
                'github_link' => 'https://forge.dotslashplay.it/play.it/website',
                'try_it' => 'https://forge.dotslashplay.it/play.it/website',
            ],
            [
                'title' => 'Promo #03 · Code Académie',
                'image' => 'storage/projects/code-academie.png',
                'image-title' => null,
                'resume' => 'Création du site de la promo #03 de la Code Académie avec une équipe de passionnés.',
                'github_link' => 'https://gitlab.com/code-academie/promo-03/apprenants/site-promo-3',
                'try_it' => 'http://promo03.code-academie.fr/',
            ],
            [
                'title' => 'Portfolio',
                'image' => 'storage/projects/portfolio.png',
                'image-title' => null,
                'resume' => 'Réalisation de mon portfolio.',
                'github_link' => 'https://github.com/ewilan-riviere/ewilan-riviere-portfolio-front',
                'try_it' => 'https://ewilan-riviere.tech/',
            ],
        ]);
    }
}
