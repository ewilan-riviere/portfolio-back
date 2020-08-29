<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
                'email'    => config('app.backpack_admin_mail'),
                'password' => Hash::make(config('app.backpack_admin_password')),
            ],
        ]);
    }
}
