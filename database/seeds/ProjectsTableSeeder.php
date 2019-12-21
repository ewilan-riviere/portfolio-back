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
                'resume' => null,
                'github_link' => null,
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
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Quizz Pokémon',
                'image' => 'projects/quizz-pokemon.png',
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Fantasy Battle',
                'image' => 'projects/fantasy-battle.png',
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Hackathon',
                'image' => 'projects/hackathon.png',
                'resume' => null,
                'github_link' => null,
                'try_it' => 'http://hackathon.code-academie.fr/',
            ],
            [
                'title' => 'Site de ./play.it',
                'image' => 'projects/play.it.png',
                'resume' => null,
                'github_link' => 'https://forge.dotslashplay.it/play.it/website',
                'try_it' => 'https://forge.dotslashplay.it/play.it/website',
            ],
            [
                'title' => 'Site de la promo #03 · Code Académie',
                'image' => 'projects/code-academie.png',
                'resume' => null,
                'github_link' => 'https://gitlab.com/code-academie/promo-03/apprenants/site-promo-3',
                'try_it' => 'http://promo03.code-academie.fr/',
            ],
            [
                'title' => 'Portfolio',
                'image' => 'projects/portfolio.png',
                'resume' => null,
                'github_link' => 'https://github.com/ewilan-riviere/ewilan-riviere-portfolio-front',
                'try_it' => 'https://ewilan-riviere.tech/',
            ],
        ]);
    }
}
