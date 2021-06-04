<?php

namespace Database\Seeders;

use File;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $frameworks_librairies = json_decode(File::get(database_path('seeders/data/skills/frameworks-librairies.json')));
        $langages_de_developpement = json_decode(File::get(database_path('seeders/data/skills/langages-de-developpement.json')));
        $langues = json_decode(File::get(database_path('seeders/data/skills/langues.json')));
        $technologies_logiciels = json_decode(File::get(database_path('seeders/data/skills/technologies-logiciels.json')));

        $this->seed($frameworks_librairies);
        $this->seed($langages_de_developpement);
        $this->seed($langues);
        $this->seed($technologies_logiciels);
    }

    public static function seed($skills)
    {
        $skillCreated = '';
        foreach ($skills as $key => $skill) {
            $skillCreated = Skill::create([
                'title'           => $skill->title,
                'version'         => $skill->version,
                'link'            => $skill->link,
                'is_free'         => $skill->is_free,
                'color'           => $skill->color,
                'color_text_dark' => $skill->color_text_dark,
                'subtitle'        => $skill->subtitle,
                'details'         => $skill->details,
                'is_favorite'     => $skill->is_favorite,
                'rating'          => $skill->rating,
                'blockquote_text' => $skill->blockquote_text,
                'blockquote_who'  => $skill->blockquote_who,
            ]);
            $category = SkillCategory::whereSlug($skill->skill_category_slug)->first();
            $skillCreated->skillCategory()->associate($category);
            $skillCreated->save();

            $image = $skill->image;
            try {
                $image = File::get(database_path("seeders/media/skills/$image"));

                if ($image) {
                    $skillCreated->addMediaFromString($image)
                        ->setName($skillCreated->slug)
                        ->setFileName($skillCreated->slug.'.svg')
                        ->toMediaCollection('skills', 'skills');
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
}
