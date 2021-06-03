<?php

namespace Database\Seeders;

use File;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Developer;
use App\Models\Formation;
use App\Models\ProjectLink;
use App\Enums\ProjectStatus;
use App\Enums\ProjectLinkType;
use Illuminate\Database\Seeder;
use App\Models\DeveloperProject;

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

        $school_formation = Formation::whereSlug('licence-de-psychologie')->first();
        $dev_web_formation = Formation::whereSlug('developpeuse-web-web-mobile')->first();
        $poec_formation = Formation::whereSlug('poec-java')->first();
        $cda_formation = Formation::whereSlug('conceptrice-developpeuse-dapplications')->first();
        $personnel_formation = Formation::whereSlug('personnel')->first();
        $useweb_formation = Formation::whereSlug('useweb')->first();

        $this->generate($school, $school_formation);
        $this->generate($personal, $personnel_formation);
        $this->generate($useweb, $useweb_formation);
    }

    public function generate(array $projects, Formation $formation)
    {
        foreach ($projects as $key => $project) {
            $projectCreated = Project::create([
                'title'              => $project->title ?? null,
                'order'              => $project->order ?? null,
                'description'        => $project->description ?? null,
                'is_favorite'        => $project->is_favorite ?? null,
                'is_display'         => $project->is_display ?? null,
                'status'             => $project->status ?? null, // ProjectStatus::make(strtoupper($project['status'])) / ProjectStatus::make(strtoupper('phase1'))
                'created_at'         => $project->created_at ?? null,
                'updated_at'         => $project->updated_at ?? null,
            ]);
            if (property_exists($project, 'links')) {
                foreach ($project->links as $key => $link) {
                    $projectLink = ProjectLink::create([
                        'repository'             => $link->repository ?? null,
                        'project'                => $link->project ?? null,
                        'type'                   => ProjectLinkType::make($key) ?? null,
                        'is_private'             => $link->is_private ?? true,
                    ]);
                    $projectLink->project()->associate($projectCreated);
                    $projectLink->save();
                }
            }
            $formation_slug = $project->formation_slug;
            $formation = Formation::whereSlug($formation_slug)->first();
            if ($formation) {
                $projectCreated->formation()->associate($formation);
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

            $image = $project->image ?? null;
            $image_title = $project->image_title ?? null;
            try {
                $image = File::get(database_path("seeders/media/projects/$image"));
                $image_title = File::get(database_path("seeders/media/projects/title/$image_title"));
            } catch (\Throwable $th) {
                //throw $th;
            }
            if ($image) {
                $projectCreated->addMediaFromString($image)
                    ->setName($projectCreated->slug)
                    ->setFileName($projectCreated->slug.'.webp')
                    ->toMediaCollection('projects', 'projects');
            }
            if ($image_title) {
                $projectCreated->addMediaFromString($image_title)
                    ->setName($projectCreated->slug.'_title')
                    ->setFileName($projectCreated->slug.'_title'.'.webp')
                    ->toMediaCollection('projects_title', 'projects');
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
