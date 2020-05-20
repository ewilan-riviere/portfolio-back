<?php

use Illuminate\Database\Seeder;

use App\User;

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
                'name' => 'Ewilan',
                'email' => config('app.admin_mail'),
                'password' => Hash::make(config('app.admin_password'))
            ]
        ]);
    }
}
