<?php

namespace Database\Seeders;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            ['name' => 'adminLab', 'guard_name' => 'web'],
        );

        Role::create(
            ['name' => 'adminZoom', 'guard_name' => 'web'],
        );

        Role::create(
            ['name' => 'pimpinan', 'guard_name' => 'web'],
        );
    }
}
