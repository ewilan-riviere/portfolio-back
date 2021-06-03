<?php

namespace Database\Seeders;

use File;
use App\Models\Passion;
use Illuminate\Database\Seeder;

class PassionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passions = json_decode(File::get(database_path('seeders/data/passions.json')));

        foreach ($passions as $key => $passion) {
            Passion::create([
                'name'  => $passion->name ?? null,
                'icon'  => $passion->icon ?? null,
                'text'  => $passion->text ?? null,
            ]);
        }
    }
}
