<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // role admin
        Role::create([
            'name'=>'admin'
        ]);
          //role member
         Role::create([
        'name'=>'member'
    ]);
    User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('rahasia123'),
    ]);
  } 
}
