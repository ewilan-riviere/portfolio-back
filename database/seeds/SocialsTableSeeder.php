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
        $database_files = database_path('seeds/files/');
        if (!file_exists(storage_path('app/public/documents'))) {
            mkdir(storage_path('app/public/documents'), 0777, true);
        }
        copy($database_files.'documents/cv.pdf', storage_path('app/public/documents/cv.pdf'));

        Social::insert([
            [
                'name' => 'GitHub',
                'link' => 'https://github.com/ewilan-riviere',
                'icon' => 'github-circle',
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
                'icon' => 'school',
                'type' => 'document'
            ]
        ]);
    }
}
