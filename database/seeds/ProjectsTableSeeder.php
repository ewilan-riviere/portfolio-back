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
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Overwatch Memory',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Pomodoro',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Quizz Pokémon',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Quizz Académie',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Fantasy Battle',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Hackathon',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => './play.it',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Promo #03 · Code Académie',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
            [
                'title' => 'Portfolio',
                'image' => null,
                'resume' => null,
                'github_link' => null,
                'try_it' => null,
            ],
        ]);
    }
}
