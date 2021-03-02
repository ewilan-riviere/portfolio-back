<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Developer;
use Illuminate\Database\Seeder;

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
            $project = Project::whereSlug($value['project_slug'])->first();
            $developer = Developer::whereSlug($value['developer_slug'])->first();
            if ($project && $developer) {
                $project->developers()->attach($developer, ['role' => array_key_exists('role', $value) ? $value['role'] : null]);
            }
        }
    }
}
