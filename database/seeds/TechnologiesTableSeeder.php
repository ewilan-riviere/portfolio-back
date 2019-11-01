<?php

use Illuminate\Database\Seeder;

use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::insert([
            'name' => 'php',
            'display_name' => 'PHP',
            'details' => 'Love PHP',
            'logo' => ''
        ]);
    }
}
