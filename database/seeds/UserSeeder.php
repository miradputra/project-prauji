<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('lupalagi'),
    ]);
    Role::create([
        'name' => 'admin',
        'guard_name' => 'web'
    ]);
    DB::table('model_has_roles')->insert([
        'role_id' => '1',
        'model_type' => 'App\User',
        'model_id' => '1'
    ]); User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('rahasia123'),
    ]);
    Role::create([
        'name' => 'admin',
        'guard_name' => 'web'
    ]);
    DB::table('model_has_roles')->insert([
        'role_id' => '1',
        'model_type' => 'App\User',
        'model_id' => '1'
    ]);
    }
}
