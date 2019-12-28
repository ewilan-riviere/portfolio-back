<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function recurseCopy($src,$dst) {
        $dir = opendir($src);
        @mkdir($dst);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    $this->recurseCopy($src . '/' . $file,$dst . '/' . $file);
                }
                else {
                    copy($src . '/' . $file,$dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }
    public function directoryToStorage($dir) {
		$database_files = database_path('seeds/storage/');
		$src = $database_files.$dir;
		$dst = storage_path('app/public/'.$dir);
        $this->recurseCopy($src,$dst);
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->directoryToStorage('documents');
        $this->directoryToStorage('projects');
        $this->directoryToStorage('icons');
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
