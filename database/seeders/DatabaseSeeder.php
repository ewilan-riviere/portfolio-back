<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Project;
use Spatie\Image\Image;
use App\Models\Formation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

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
        $this->call(UserSeeder::class);
        $this->call(CategorySkillSeeder::class);
        $this->call(ExperienceTypeSeeder::class);
        $this->call(ProjectStatusSeeder::class);
        $this->call(FormationsSeeder::class);
        $this->call(DeveloperSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(PassionSeeder::class);
        $this->clearTemporary();
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
            File::deleteDirectory('public/storage/media');
            $this->clearTemporary();
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $isSuccess;
    }

    public function clearTemporary()
    {
        $dir = 'public/storage/temporary/';
        $leave_files = ['.gitignore'];

        foreach (glob("$dir/*") as $file) {
            if (! in_array(basename($file), $leave_files)) {
                unlink($file);
            }
        }
    }

    public static function convertImage(string $original_path, string $extension): string
    {
        $temporary_path = 'public/storage/temporary/';
        $name = $temporary_path.md5($original_path).'.'.$extension;
        Image::load($original_path)
            ->save($name);

        return $name;
    }
}
