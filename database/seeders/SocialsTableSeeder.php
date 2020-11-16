<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

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
                'icon' => 'github',
                'type' => 'link',
            ],
            [
                'name' => 'GitLab',
                'link' => 'https://gitlab.com/EwieFairy',
                'file' => null,
                'icon' => 'gitlab',
                'type' => 'link',
            ],
            [
                'name' => 'LinkedIn',
                'link' => 'https://www.linkedin.com/in/ewilan-riviere/',
                'file' => null,
                'icon' => 'linkedin',
                'type' => 'link',
            ],
            [
                'name' => 'E-mail',
                'link' => 'mailto:ewilan@dotslashplay.it',
                'file' => null,
                'icon' => 'email',
                'type' => 'link',
            ],
            [
                'name' => 'CV',
                'link' => null,
                'file' => 'storage/documents/cv.pdf',
                'icon' => 'address-card',
                'type' => 'file',
            ],
        ]);
    }
}
