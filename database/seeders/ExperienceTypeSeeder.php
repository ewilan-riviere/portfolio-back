<?php

namespace Database\Seeders;

use File;
use App\Models\ExperienceType;
use Illuminate\Database\Seeder;

class ExperienceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experience_types = json_decode(File::get(database_path('seeders/data/experiences-types.json')));

        foreach ($experience_types as $key => $experience_type) {
            ExperienceType::create([
                'title' => $experience_type->title,
            ]);
        }
    }
}
