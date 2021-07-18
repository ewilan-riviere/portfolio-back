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
        $this->clearDirectory('temporary');
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
            $this->clearDirectory('media');
            $this->clearDirectory('temporary');
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $isSuccess;
    }

    public function clearDirectory(string $path)
    {
        $dir = "public/storage/$path/";
        $leave_files = ['.gitignore'];

        foreach (glob("$dir/*") as $file) {
            if (! in_array(basename($file), $leave_files)) {
                unlink($file);
            }
        }
    }

    public static function convertImage(string $original_path, string $extension): string | false
    {
        $temporary_path = 'public/storage/temporary/';
        $name = $temporary_path.md5($original_path).'.'.$extension;
        $file_exist = File::exists($original_path);

        if ($file_exist) {
            try {
                Image::load($original_path)
                    ->save($name);
            } catch (\Throwable $th) {
                //throw $th;
                $original_path = basename($original_path);
                echo "Can't save $original_path\n";
            }

            return $name;
        }

        return false;
    }
}
