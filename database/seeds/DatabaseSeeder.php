<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(TechnologiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FormationsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialsTableSeeder::class);
        $this->call(TextsTableSeeder::class);
        $this->call(MediasTableSeeder::class);
    }
}
