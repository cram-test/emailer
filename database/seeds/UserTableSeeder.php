<?php

use Illuminate\Database\Seeder;
use Emailer\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleUser = Role::where('name', 'user')->first();
        $roleAdmin = Role::where('name', 'admin')->first();

        $user = \Emailer\User::firstOrCreate([
            'name' => 'Test user',
            'email' => 'test@test.com',
            'password' => bcrypt('secret')
        ]);
        $user->save();

        $admin = \Emailer\User::firstOrCreate([
            'name' => 'Admin user',
            'email' => 'admin@test.com',
            'password' => bcrypt('secret')
        ]);
        $admin->save();

        $user->roles()->attach($roleUser);
        $admin->roles()->attach($roleAdmin);
    }
}
