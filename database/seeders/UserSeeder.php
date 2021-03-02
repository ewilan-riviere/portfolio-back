<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name'     => 'Ewilan',
                'email'    => 'admin@mail.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
