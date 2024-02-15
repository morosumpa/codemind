<?php

namespace Database\Seeders;

use App\Models\World;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        World::create([
            'name'=>'HTML/CSS'
        ]);
        World::create([
            'name'=>'JAVA'
        ]);
        World::create([
            'name'=>'PHP'
        ]);
        World::create([
            'name'=>'JS'
        ]);
        World::create([
            'name'=>'GIT'
        ]);
    }
}
