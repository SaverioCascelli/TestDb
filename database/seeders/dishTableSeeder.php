<?php

namespace Database\Seeders;

use App\Models\dish;
use App\Models\resturant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodsname = ['pistacchiona', 'ragu', 'genovese', 'margherita', 'carbonara'];
        $resturants = resturant::all();
        foreach ($resturants as  $resturant) {
            foreach ($foodsname as  $food) {
                $newDish = new dish();
                $newDish->name = $food . $resturant->id;
                $newDish->description = 'prova123';
                $newDish->price = rand(2, 15);
                $newDish->resturant_id = $resturant->id;
                $newDish->save();
            }
        }
    }
}
