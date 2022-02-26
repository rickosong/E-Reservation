<?php

namespace Database\Seeders;

use App\Models\Jenis_Role;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Jenis_Role::create(
            [
                'jenis_role' => 'Admin'
            ]
        );

        Jenis_Role::create(
            [
                'jenis_role' => 'Member'
            ]
        );

        Jenis_Role::create(
            [
                'jenis_role' => 'Petugas'
            ]
        );

        User::create(
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'name' => 'Admin Reservasi',
                'jenis_role_id' => 1,
                'email' => 'admin@gmail.com',
                'phone_number' => '081912345678',
            ],
        );

        User::create(
            [
                'username' => 'morito',
                'password' => bcrypt('morito'),
                'name' => 'Mohammmad Ricko Aprilianto',
                'jenis_role_id' => 2,
                'email' => 'ricko.aprilianto00@gmail.com',
                'phone_number' => '081932432218',
            ],
        );

        Profile::create(
            [
                'user_id' => 1,
                'birthday' => 'silahkan isi tanggal lahir anda',
                'addres' => 'silahkan isi alamat anda',
                'image' => 'user.svg',
            ]
        );
    }
}
