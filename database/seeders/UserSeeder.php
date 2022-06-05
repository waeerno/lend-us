<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // create demo users
        $user  = User::create([
            'name' => 'Tomi Z',
            'email' => 'a@gmail.com',
            'password' => bcrypt('adminadmin'),
        ]);
        $user->assignRole('admin');

        $user  = User::create([
            'name' => 'Supriadi S.Kom',
            'email' => 'b@example.com',
            'password' => bcrypt('adminadmin'),
        ]);
        $user->assignRole('admin');

        $user  = User::create([
            'name' => 'chandra S.Kom',
            'email' => 'c@example.com',
            'password' => bcrypt('adminadmin'),
        ]);
        $user->assignRole('administrasi');

        $user  = User::create([
            'name' => 'pimpinan',
            'email' => 'd@example.com',
            'password' => bcrypt('adminadmin'),
        ]);
        $user->assignRole('pimpinan');
    }
}
