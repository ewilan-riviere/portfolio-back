<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer_project = [
            [
                'project_slug'        => 'site-web-de-playit',
                'developer_slug'      => 'antoine-le-gonidec',
            ],
            [
                'project_slug'        => 'site-web-de-playit',
                'developer_slug'      => 'ewilan-riviere',
                'role'                => 'Développeuse full-stack',
            ],
            [
                'project_slug'        => 'portfolio',
                'developer_slug'      => 'ewilan-riviere',
                'role'                => 'Développeuse full-stack',
            ],
            [
                'project_slug'        => 'ter-sur-la-cyberviolence',
                'developer_slug'      => 'ewilan-riviere',
                'role'                => 'Rédactrice',
            ],
            [
                'project_slug'        => 'promo-03-code-academie',
                'developer_slug'      => 'ewilan-riviere',
                'role'                => 'Développeuse full-stack',
            ],
            [
                'project_slug'        => 'overwatch-memory',
                'developer_slug'      => 'ewilan-riviere',
                'role'                => 'Développeuse full-stack',
            ],
            [
                'project_slug'        => 'quizz-pokemon',
                'developer_slug'      => 'ewilan-riviere',
                'role'                => 'Développeuse full-stack',
            ],
            [
                'project_slug'        => 'pomodoro',
                'developer_slug'      => 'ewilan-riviere',
                'role'                => 'Développeuse full-stack',
            ],
            // [
            //     'project_slug'        => '',
            //     'developer_slug' => '',
            // ],
        ];

        foreach ($developer_project as $key => $value) {
            DB::table('developer_project')->insert($value);
        }
    }
}
