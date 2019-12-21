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
                'icon' => 'github-circle',
                'type' => 'link'
            ],
            [
                'name' => 'GitLab',
                'link' => 'https://gitlab.com/EwieFairy',
                'icon' => 'gitlab',
                'type' => 'link'
            ],
            [
                'name' => 'LinkedIn',
                'link' => 'https://www.linkedin.com/in/ewilan-riviere/',
                'icon' => 'linkedin-box',
                'type' => 'link'
            ],
            [
                'name' => 'E-mail',
                'link' => 'ewilan@dotslashplay.it',
                'icon' => 'email',
                'type' => 'link'
            ],
            [
                'name' => 'CV',
                'link' => 'documents/cv.pdf',
                'icon' => 'account-card-details',
                'type' => 'document'
            ]
        ]);
    }
}
