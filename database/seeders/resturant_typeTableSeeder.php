<?php

namespace Database\Seeders;

use App\Models\type;
use App\Models\resturant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class resturant_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $resturants = resturant::all();


        foreach ($resturants as $resturant) {
            for ($i = 0; $i < 2; $i++) {
                $type = type::inRandomOrder()->first()->id;
                $resturant->types()->attach($type);
            }
        }
    }
}
