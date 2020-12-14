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
            // [
            //     'project_slug'        => '',
            //     'skill_slug' => '',
            // ],
        ];

        foreach ($project_skill as $key => $value) {
            DB::table('project_skill')->insert($value);
        }
    }
}
