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
        $users = [
            [
                'name' => 'Lecturer 1',
                'email' => 'lecturer@unikl.edu.my',
                'password' => 'Edu1q2w3e',
                'role' => 'lecturer',
            ],
            [
                'name' => 'Student 1',
                'email' => 'student@unikl.edu.my',
                'password' => 'Edu1q2w3e',
                'lecturer_id' => 1,
                'role' => 'student',
            ],
            [
                'name' => 'Admin 1',
                'email' => 'admin@unikl.edu.my',
                'password' => 'Edu1q2w3e',
                'role' => 'admin',
            ],
        ];

        foreach ($users as $key => $user) {
            $user = (object)$user;
            User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
            ])->assignRole($user->role);
        }
    }
}
