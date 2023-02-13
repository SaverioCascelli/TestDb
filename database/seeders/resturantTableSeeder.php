<?php

namespace Database\Seeders;

use App\Models\city;
use App\Models\resturant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class resturantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = city::all();
        foreach ($cities as  $city) {
            for ($i = 0; $i < 5; $i++) {
                $newResturant = new resturant();
                $newResturant->name = $city->name . "-resturant-" . $city->name;
                $newResturant->city_id = $city->id;
                $newResturant->save();
            }
        }
    }
}
