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
    $admin = new User();
    $admin->name ='Admin';
    $admin->email ='admin@gmail.com';
    $admin->password = bcrypt('lupalagi');
    $admin->save();
    }
}
