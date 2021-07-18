<?php

namespace Database\Seeders;

use App\Models\ProjectStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_status = json_decode(File::get(database_path('seeders/data/project-status.json')));

        foreach ($project_status as $key => $status) {
            ProjectStatus::create([
                'name' => [
                    'fr' => $status->name?->fr ?? '',
                    'en' => $status->name?->en ?? '',
                ],
                'order' => $status->order,
            ]);
        }
    }
}
