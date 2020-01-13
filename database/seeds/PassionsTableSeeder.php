<?php

use Illuminate\Database\Seeder;

use App\Models\Passion;

class PassionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passion::insert([
            [
                'name' => 'Lecture',
                'icon' => '',
                'text' => 'La lecture'
            ],
            [
                'name' => 'Les jeux vidéo et leurs mods',
                'icon' => '',
                'text' => 'Modder les jeux vidéo'
            ],
            [
                'name' => 'Développer',
                'icon' => '',
                'text' => 'Des projets personnels ou avec des ami·es'
            ]
        ]);
    }
}
