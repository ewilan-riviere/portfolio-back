<?php

namespace Database\Seeders;

use App\Utils\ManageStorage;
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
        $clean = ManageStorage::generateStorageFiles();
        $clean = $clean ? 'OK' : 'Error';
        dump("generateStorageFiles: $clean");
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
