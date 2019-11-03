<?php

use Illuminate\Database\Seeder;

use App\Models\Media;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::insert([
            [
                'slug' => '',
                'media' => ''
            ]
        ]);
    }
}
