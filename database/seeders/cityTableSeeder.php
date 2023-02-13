<?php

namespace Database\Seeders;

use App\Models\city;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['bari', 'lecce', 'taranto', 'brindisi', 'andria', 'foggia', 'barletta', 'trani', 'alberobello', 'bitonto', 'bisceglie', 'ostuni', 'corato', 'gallipoli', 'manfredonia', 'molfetta', 'polignano', 'otranto', 'fasano'];

        foreach ($data as   $value) {
            $newCity = new city();
            $newCity->name = $value;
            $newCity->save();
        }
    }
}
