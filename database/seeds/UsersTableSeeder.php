<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $adminRole = Role::where('name','admin')->first();
        $userRole = Role::where('name','user')->first();
        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    
        $user = User::create([
            'name' => 'User1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    
        $users = User::create([
            'name' => 'User2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
        $users->roles()->attach($userRole);
        
    }
}
