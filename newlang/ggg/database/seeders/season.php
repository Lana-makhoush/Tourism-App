<?php

namespace Database\Seeders;

use App\Models\season as ModelsSeason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class season extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsSeason::create([
            'season_Name'=>'Spring',
            
           ]);
           ModelsSeason::create([
            
            'season_Name'=>'Summer',
            
           ]);
           ModelsSeason::create([
            
            'season_Name'=>'Autumn',
           
           ]);
           ModelsSeason::create([
           
            'season_Name'=>'Winter',
           
           ]);
        
    }
}
