<?php

namespace Database\Seeders;

use App\Models\section as ModelsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class section extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsSection::create([
            'section_Name'=>'Solo_Trip',
            
           ]);
           ModelsSection::create([
            
            'section_Name'=>'Family_Trip',
            
           ]);
           ModelsSection::create([
            
            'section_Name'=>'Friends_Trip',
           
           ]);
    }
}
