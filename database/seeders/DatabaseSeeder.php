<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenis_Ruangan;

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

        Jenis_Ruangan::create(
            [
                'jenis_ruangan' => 'Ruangan Besar'
            ]
        );

        Jenis_Ruangan::create(
            [
                'jenis_ruangan' => 'Ruangan Kecil'
            ]
        );
    }
    
}
