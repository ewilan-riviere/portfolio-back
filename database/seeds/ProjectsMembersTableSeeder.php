<?php

use App\Models\ProjectMember;
use Illuminate\Database\Seeder;

class ProjectsMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectMember::insert([
            [
                'name'      => 'Nora Hennebert',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
            [
                'name'      => 'Antoine Le Gonidec',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
            [
                'name'      => 'Hugo Schindelman',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
            [
                'name'      => 'Delphine Brunetière',
                'github'    => '',
                'portfolio' => '',
                'linkedin'  => '',
            ],
        ]);
    }
}
