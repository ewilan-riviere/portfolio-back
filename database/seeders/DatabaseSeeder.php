<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function directoryToStorage($dir)
    {
        $database_files = database_path('seeders/storage/');
        $src = $database_files.$dir;
        $dst = storage_path('app/public/'.$dir);
        recurseCopy($src, $dst);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dirs = ['cache',
            'documents',
            'projects',
            'icons',
            'formations',
            'fonts',
            'skills',
        ];
        $clean = File::cleanDirectory(storage_path('app/public/'));
        $clean = $clean ? 'OK' : 'Error';
        dump("Clean storage: $clean");
        foreach ($dirs as $key => $dir) {
            $this->directoryToStorage($dir);
        }
        // $this->call(UsersTableSeeder::class);
        $this->call(SkillsCategoriesTableSeeder::class);
        $this->call(FormationsSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(SkillSeeder::class);
        // $this->call(PassionsTableSeeder::class);
        $this->call(DeveloperSeeder::class);
        $this->call(DeveloperProjectSeeder::class);
        $this->call(ProjectSkillSeeder::class);
        // $this->call(ForeignKeysTableSeeder::class);
    }
}
