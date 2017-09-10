<?php

use Illuminate\Database\Seeder;
use Emailer\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'user',
            'description' => 'Default user role',
        ])->save();

        Role::firstOrCreate([
            'name' => 'admin',
            'description' => 'Default admin role',
        ])->save();
    }
}
