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
