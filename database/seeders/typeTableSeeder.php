<?php

namespace Database\Seeders;

use App\Models\type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  ['pasta', 'pizza', 'pesce', 'carne', 'vegan'];

        foreach ($data as  $type) {
            $newType = new type();
            $newType->name =  $type;
            $newType->save();
        }
    }
}
