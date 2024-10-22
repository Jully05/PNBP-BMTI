<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('buildings')->insert([
            [
                'name' => 'Gedung Serbaguna',
                'image' => 'img/gedung.png',
                'price' => 5000000,
            ],
            [
                'name' => 'Aula Utama',
                'image' => 'img/background.jpg',
                'price' => 3500000,
            ],
        ]);
    }
}
