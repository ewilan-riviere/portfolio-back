<?php

use Illuminate\Database\Seeder;

class ForeignKeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_skill')->insert([
            // zergling evolution
            [
                'project_id' => 1,
                'skill_id' => 5
            ],
            // overwatch memory
            [
                'project_id' => 2,
                'skill_id' => 5
            ],
            // pomodoro
            [
                'project_id' => 3,
                'skill_id' => 5
            ],
            // quizz pokemon
            [
                'project_id' => 4,
                'skill_id' => 5
            ],
            // fantasy battle
            [
                'project_id' => 5,
                'skill_id' => 1
            ],
            // play.it
            [
                'project_id' => 6,
                'skill_id' => 1
            ],
            [
                'project_id' => 6,
                'skill_id' => 4
            ],
            [
                'project_id' => 6,
                'skill_id' => 7
            ],
            [
                'project_id' => 6,
                'skill_id' => 12
            ],
            [
                'project_id' => 6,
                'skill_id' => 14
            ],
            // promo 03
            [
                'project_id' => 7,
                'skill_id' => 1
            ],
            [
                'project_id' => 7,
                'skill_id' => 4
            ],
            [
                'project_id' => 7,
                'skill_id' => 7
            ],
            [
                'project_id' => 7,
                'skill_id' => 12
            ],
            [
                'project_id' => 7,
                'skill_id' => 14
            ],
            [
                'project_id' => 7,
                'skill_id' => 5
            ],
            [
                'project_id' => 7,
                'skill_id' => 16
            ],
            // portfolio
            [
                'project_id' => 8,
                'skill_id' => 1
            ],
            [
                'project_id' => 8,
                'skill_id' => 4
            ],
            [
                'project_id' => 8,
                'skill_id' => 5
            ],
            [
                'project_id' => 8,
                'skill_id' => 7
            ],
            [
                'project_id' => 8,
                'skill_id' => 12
            ],
            [
                'project_id' => 8,
                'skill_id' => 13
            ],
            [
                'project_id' => 8,
                'skill_id' => 15
            ],
            [
                'project_id' => 8,
                'skill_id' => 17
            ],
        ]);

        DB::table('project_project_member')->insert([
            [
                'project_id' => 6,
                'project_member_id' => 2
            ]
        ]);
    }
}
