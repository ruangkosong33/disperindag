<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'superadmin',
               'email'=>'super@mail.com',
               'role'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'admin',
               'email'=>'admin@mail.com',
               'role'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
