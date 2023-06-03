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
                'password' => 'Lect1q2w3e',
            ],
            [
                'name' => 'Student 1',
                'email' => 'student@unikl.edu.my',
                'password' => 'Stud1q2w3e',
            ],
        ];

        foreach ($users as $key => $user) {
            $user = User::create($user);
        }
    }
}
