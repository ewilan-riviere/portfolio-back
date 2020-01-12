<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'category' => 'Language',
                'display' => 'Langages de développement'
            ],
            [
                'category' => 'Framework',
                'display' => 'Frameworks & librairies'
            ],
            [
                'category' => 'Technologie',
                'display' => 'Technologies & logiciels'
            ],
            [
                'category' => 'Langue',
                'display' => 'Langues'
            ]
        ]);
    }
}
