<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'teacher',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'student',
            'guard_name' => 'web'
        ]);
    }
}
