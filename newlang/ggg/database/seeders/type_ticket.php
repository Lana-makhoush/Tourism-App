<?php

namespace Database\Seeders;

use App\Models\type_ticket as ModelsType_ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class type_ticket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsType_ticket::create([
            'type'=>'OptionalTrip',

           ]);
           ModelsType_ticket::create([

            'type'=>'ConstTrip',

           ]);
           ModelsType_ticket::create([

            'type'=>'Ticket',


           ]);
    }
}
