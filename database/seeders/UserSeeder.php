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
        $user->assignRole('adminLab');

        $user  = User::create([
            'name' => 'Supriadi S.Kom',
            'email' => 'b@example.com',
            'password' => bcrypt('adminadmin'),
        ]);
        $user->assignRole('adminZoom');

        $user  = User::create([
            'name' => 'pimpinan',
            'email' => 'c@example.com',
            'password' => bcrypt('adminadmin'),
        ]);
        $user->assignRole('pimpinan');
    }
}
