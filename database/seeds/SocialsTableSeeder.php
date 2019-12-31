<?php

use Illuminate\Database\Seeder;

use App\Models\Social;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::insert([
            [
                'name' => 'GitHub',
                'link' => 'https://github.com/ewilan-riviere',
                'file' => null,
                'icon' => 'fab fa-github',
                'type' => 'link'
            ],
            [
                'name' => 'GitLab',
                'link' => 'https://gitlab.com/EwieFairy',
                'file' => null,
                'icon' => 'fab fa-gitlab',
                'type' => 'link'
            ],
            [
                'name' => 'LinkedIn',
                'link' => 'https://www.linkedin.com/in/ewilan-riviere/',
                'file' => null,
                'icon' => 'fab fa-linkedin',
                'type' => 'link'
            ],
            [
                'name' => 'E-mail',
                'link' => 'ewilan@dotslashplay.it',
                'file' => null,
                'icon' => 'fas fa-envelope',
                'type' => 'link'
            ],
            [
                'name' => 'CV',
                'link' => null,
                'file' => 'storage/documents/cv.pdf',
                'icon' => 'fas fa-address-card',
                'type' => 'file'
            ]
        ]);
    }
}
