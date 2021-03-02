<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Formation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->clearAllMediaCollection();
        // $this->call(UserSeeder::class);
        // $this->call(CategorySkillSeeder::class);
        // $this->call(FormationsSeeder::class);
        // $this->call(ProjectSeeder::class);
        // $this->call(SkillSeeder::class);
        // $this->call(PassionSeeder::class);
        // $this->call(DeveloperSeeder::class);
        // $this->call(DeveloperProjectSeeder::class);
        // $this->call(ProjectSkillSeeder::class);
    }

    /**
     * Clear all media collection manage by spatie/laravel-medialibrary.
     *
     * @return bool
     */
    public function clearAllMediaCollection(): bool
    {
        $isSuccess = false;
        try {
            $projects = Project::all();
            $skills = Skill::all();
            $formations = Formation::all();
            $projects->each(function ($query) {
                $query->clearMediaCollection('projects');
                $query->clearMediaCollection('projects_title');
            });
            $skills->each(function ($query) {
                $query->clearMediaCollection('skills');
            });
            $formations->each(function ($query) {
                $query->clearMediaCollection('formations');
            });
            $isSuccess = true;
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $isSuccess;
    }
}
