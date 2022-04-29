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
        $admin = User::create([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
        ]);
        $teacher = User::create([
            'username' => 'teacher',
            'password' => bcrypt('teacher123'),
        ]);
        $student = User::create([
            'username' => 'student',
            'password' => bcrypt('student123'),
        ]);

        $admin->assignRole('admin');
        $teacher->assignRole('teacher');
        $student->assignRole('student');
    }
}
