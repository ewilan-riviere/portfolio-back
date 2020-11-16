<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

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
                'slug'    => 'langages-de-developpement',
                'display' => 'Langages de développement',
            ],
            [
                'slug'    => 'frameworks-librairies',
                'display' => 'Frameworks & librairies',
            ],
            [
                'slug'    => 'technologies-logiciels',
                'display' => 'Technologies & logiciels',
            ],
            [
                'slug'    => 'langues',
                'display' => 'Langues',
            ],
        ]);
    }
}
