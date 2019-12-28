<?php

use Illuminate\Database\Seeder;

use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::insert([
            [
                'title' => 'PHP 7',
                'category_id' => 1,
            ],
            [
                'title' => 'HTML 5',
                'category_id' => 1,
            ],
            [
                'title' => 'CSS 3',
                'category_id' => 1,
            ],
            [
                'title' => 'SASS',
                'category_id' => 1,
            ],
            [
                'title' => 'JavaScript',
                'category_id' => 1,
            ],
            [
                'title' => 'MySQL',
                'category_id' => 1,
            ],
            [
                'title' => 'SQL Server',
                'category_id' => 1,
            ],
            [
                'title' => 'Java',
                'category_id' => 1,
            ],
            [
                'title' => 'Shell',
                'category_id' => 1,
            ],
            [
                'title' => 'LaTeX',
                'category_id' => 1,
            ],
            [
                'title' => 'Laravel 5',
                'category_id' => 2,
            ],
            [
                'title' => 'Bootstrap 4',
                'category_id' => 2,
            ],
            [
                'title' => 'jQuery',
                'category_id' => 2,
            ],
            [
                'title' => 'VueJS',
                'category_id' => 2,
            ],
            [
                'title' => 'Wordpress',
                'category_id' => 2,
            ],
            [
                'title' => 'git',
                'category_id' => 3,
            ],
            [
                'title' => 'Visual Studio Code',
                'category_id' => 3,
            ],
            [
                'title' => 'GitKraken',
                'category_id' => 3,
            ],
            [
                'title' => 'phpMyAdmin',
                'category_id' => 3,
            ],
            [
                'title' => 'Photoshop CS6',
                'category_id' => 3,
            ],
            [
                'title' => 'GIMP',
                'category_id' => 3,
            ],
            [
                'title' => 'Office',
                'category_id' => 3,
            ],
            [
                'title' => 'Discord',
                'category_id' => 3,
            ],
            [
                'title' => 'conky',
                'category_id' => 3,
            ],
            [
                'title' => 'Français (langue natale)',
                'category_id' => 4,
            ],
            [
                'title' => 'Anglais (comprendre les post de StackOverflow)',
                'category_id' => 4,
            ],
        ]);
    }
}
