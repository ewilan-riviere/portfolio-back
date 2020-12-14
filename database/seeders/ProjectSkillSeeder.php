<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_skill = [
            [
                'project_slug'        => 'site-web-de-playit',
                'skill_slug'          => 'laravel',
            ],
            [
                'project_slug'        => 'site-web-de-playit',
                'skill_slug'          => 'blade',
            ],
            [
                'project_slug'        => 'site-web-de-playit',
                'skill_slug'          => 'tailwind-css',
            ],
            [
                'project_slug'        => 'portfolio',
                'skill_slug'          => 'laravel',
            ],
            [
                'project_slug'        => 'portfolio',
                'skill_slug'          => 'nuxtjs',
            ],
            [
                'project_slug'        => 'portfolio',
                'skill_slug'          => 'tailwind-css',
            ],
            [
                'project_slug'        => 'promo-03-code-academie',
                'skill_slug'          => 'laravel',
            ],
            [
                'project_slug'        => 'promo-03-code-academie',
                'skill_slug'          => 'javascript',
            ],
            [
                'project_slug'        => 'promo-03-code-academie',
                'skill_slug'          => 'bootstrap',
            ],
            [
                'project_slug'        => 'overwatch-memory',
                'skill_slug'          => 'javascript',
            ],
            [
                'project_slug'        => 'quizz-pokemon',
                'skill_slug'          => 'javascript',
            ],
            [
                'project_slug'        => 'pomodoro',
                'skill_slug'          => 'javascript',
            ],
            // [
            //     'project_slug'        => '',
            //     'skill_slug''',
            // ],
        ];

        foreach ($project_skill as $key => $value) {
            DB::table('project_skill')->insert($value);
        }
    }
}
