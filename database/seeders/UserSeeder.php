<?php

namespace Database\Seeders;

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
        User::factory()
            ->count(10)
            ->create();

        $roles = ['Admin' , 'User1' , 'User2' , 'User3'];
        $users = User::all();
        foreach ($users as $user){
            $role = $roles[rand(0 , 3)];
            $user->assignRole($role);
        }

    }
}
