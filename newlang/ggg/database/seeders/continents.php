<?php

namespace Database\Seeders;

use App\Models\continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class continents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        continent::create([
            'continents_Name'=>'Asia',
            
           ]);
           continent::create([
            
            'continents_Name'=>'Africa',
            
           ]);
           continent::create([
            
            'continents_Name'=>'Europe',
           
           ]);
           continent::create([
           
            'continents_Name'=>'North_America',
           
           ]);
           continent::create([
            
            'continents_Name'=>'South_America',
            
           ]);
           continent::create([
           
            'continents_Name'=>'Australia'
           ]);
    }
}
