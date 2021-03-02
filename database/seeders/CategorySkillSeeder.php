<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Illuminate\Database\Seeder;

class CategorySkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skillsCategories = [
            [
                'title'   => 'Langages de développement',
            ],
            [
                'title'   => 'Frameworks & librairies',
            ],
            [
                'title'   => 'Technologies & logiciels',
            ],
            [
                'title'   => 'Langues',
            ],
        ];

        foreach ($skillsCategories as $key => $skillCategory) {
            SkillCategory::create($skillCategory);
        }
    }
}
