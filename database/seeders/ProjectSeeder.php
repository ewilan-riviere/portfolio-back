<?php

namespace Database\Seeders;

use File;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Developer;
use App\Models\Formation;
use App\Models\ProjectLink;
use Illuminate\Support\Str;
use App\Models\ProjectStatus;
use App\Models\ExperienceType;
use Illuminate\Database\Seeder;
use App\Models\DeveloperProject;
use App\Models\Enums\ProjectLinkType;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = json_decode(File::get(database_path('seeders/data/projects/school.json')));
        $personal = json_decode(File::get(database_path('seeders/data/projects/personal.json')));
        $useweb = json_decode(File::get(database_path('seeders/data/projects/useweb.json')));

        // $school_formation = Formation::whereSlug('licence-de-psychologie')->first();
        // $dev_web_formation = Formation::whereSlug('developpeuse-web-web-mobile')->first();
        // $poec_formation = Formation::whereSlug('poec-java')->first();
        // $cda_formation = Formation::whereSlug('conceptrice-developpeuse-dapplications')->first();
        // $personnel_formation = Formation::whereSlug('personnel')->first();
        // $useweb_formation = Formation::whereSlug('useweb')->first();

        $this->generate($school);
        $this->generate($personal);
        $this->generate($useweb);
    }

    public function generate(array $projects)
    {
        foreach ($projects as $key => $project) {
            $projectCreated = Project::create([
                'title'              => $project->title ?? '',
                'order'              => $project->order ?? null,
                'is_favorite'        => $project->is_favorite ?? false,
                'is_display'         => $project->is_display ?? false,
                'is_private'         => $project->is_private ?? false,
                'created_at'         => $project->created_at ?? null,
                'updated_at'         => $project->updated_at ?? null,
            ]);
            if (property_exists($project, 'subtitle')) {
                $projectCreated->subtitle = [
                    'fr' => $project->subtitle?->fr ?? '',
                    'en' => $project->subtitle?->en ?? '',
                ];
                $projectCreated->save();
            }
            if (property_exists($project, 'abstract')) {
                $projectCreated->abstract = [
                    'fr' => $project->abstract?->fr ?? '',
                    'en' => $project->abstract?->en ?? '',
                ];
                $projectCreated->save();
            }
            if (property_exists($project, 'description')) {
                $projectCreated->description = [
                    'fr' => Str::markdown($project->description?->fr ?? ''),
                    'en' => Str::markdown($project->description?->en ?? ''),
                ];
                $projectCreated->save();
            }
            if (property_exists($project, 'links')) {
                foreach ($project->links as $key => $link) {
                    $projectLink = ProjectLink::create([
                        'repository'             => $link->repository ?? null,
                        'project'                => $link->project ?? null,
                        'type'                   => ProjectLinkType::make($key) ?? null,
                    ]);
                    $projectLink->project()->associate($projectCreated);
                    $projectLink->save();
                }
            }

            $status_order = $project->status;
            $status = ProjectStatus::whereOrder($status_order)->first();
            if ($status) {
                $projectCreated->status()->associate($status);
                $projectCreated->save();
            }

            $formation_slug = $project->formation;
            $formation = Formation::whereSlug($formation_slug)->first();
            if ($formation) {
                $projectCreated->formation()->associate($formation);
                $projectCreated->save();
            }

            $experience_type_slug = $project->experience_type;
            $experience_type = ExperienceType::whereSlug($experience_type_slug)->first();
            if ($experience_type) {
                $projectCreated->experience()->associate($experience_type);
                $projectCreated->save();
            }

            $developers = $project->developers;
            foreach ($developers as $key => $developer) {
                $developer_entity = Developer::whereSlug($developer->slug)->first();
                $pivot = DeveloperProject::create([
                    'role' => $developer->role,
                ]);
                $pivot->developer()->associate($developer_entity);
                $pivot->project()->associate($projectCreated);
                $pivot->save();
            }

            try {
                $path = database_path("seeders/media/projects/$projectCreated->slug.webp");
                $convert = DatabaseSeeder::convertImage($path, 'webp');
                $picture_logo = File::get($convert);

                $projectCreated->addMediaFromString($picture_logo)
                    ->setName($projectCreated->slug.'_logo')
                    ->setFileName($projectCreated->slug.'_logo.webp')
                    ->toMediaCollection('projects_logo', 'projects');
            } catch (\Throwable $th) {
                //throw $th;
                echo $th->getMessage().', title:'.$project->title;
            }
            try {
                $path = database_path("seeders/media/projects/title/$projectCreated->slug.webp");
                $convert = DatabaseSeeder::convertImage($path, 'webp');
                $picture_title = File::get($convert);

                $projectCreated->addMediaFromString($picture_title)
                    ->setName($projectCreated->slug.'_title')
                    ->setFileName($projectCreated->slug.'_title'.'.webp')
                    ->toMediaCollection('projects_title', 'projects');
            } catch (\Throwable $th) {
                //throw $th;
            }
            try {
                $path = database_path("seeders/media/projects/banner/$projectCreated->slug.webp");
                $convert = DatabaseSeeder::convertImage($path, 'webp');
                $picture_banner = File::get($convert);

                $projectCreated->addMediaFromString($picture_banner)
                    ->setName($projectCreated->slug.'_banner')
                    ->setFileName($projectCreated->slug.'_banner'.'.webp')
                    ->toMediaCollection('projects_banner', 'projects');
            } catch (\Throwable $th) {
                //throw $th;
            }
            try {
                $gallery = File::allFiles(database_path("seeders/media/projects/gallery/$projectCreated->slug/"));

                foreach ($gallery as $key => $picture) {
                    $path = $picture;
                    $convert = DatabaseSeeder::convertImage($path, 'webp');
                    $picture = File::get($convert);

                    $projectCreated->addMediaFromString($picture)
                        ->setName($projectCreated->slug.'-'.$key.'_gallery')
                        ->setFileName($projectCreated->slug.'-'.$key.'_gallery'.'.webp')
                        ->toMediaCollection('projects_gallery', 'projects');
                }
            } catch (\Throwable $th) {
                //throw $th;
            }

            if (property_exists($project, 'skills')) {
                for ($i = 0; $i < sizeof($project->skills); $i++) {
                    $skill = Skill::whereSlug($project->skills[$i])->first();
                    if ($skill) {
                        $projectCreated->skills()->save($skill);
                    }
                }
            }
        }
    }
}
