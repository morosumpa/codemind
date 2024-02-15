<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Achievement::create([
            'tier'=>'Bronce'
        ]);
        Achievement::create([
            'tier'=>'Plata'
        ]);
        Achievement::create([
            'tier'=>'Oro'
        ]);
        Achievement::create([
            'tier'=>'Diamante'
        ]);
        Achievement::create([
            'tier'=>'Platino'
        ]);
    }
}
