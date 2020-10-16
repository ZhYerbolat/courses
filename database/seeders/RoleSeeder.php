<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'Admin', 'slug'=>'admin']);
        Role::create(['name'=>'Moderator', 'slug'=>'moderator']);
        Role::create(['name'=>'Student', 'slug'=>'student']);
        Role::create(['name'=>'Student-990', 'slug'=>'student-990']);
    }
}
