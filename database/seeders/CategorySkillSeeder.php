<?php

namespace Database\Seeders;

use File;
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
        $skillsCategories = json_decode(File::get(database_path('seeders/data/skill_categories.json')));

        foreach ($skillsCategories as $key => $skillCategory) {
            SkillCategory::create([
                'title' => $skillCategory->title,
            ]);
        }
    }
}
