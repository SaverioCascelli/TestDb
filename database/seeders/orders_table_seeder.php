<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Builder;
use App\Models\city;
use App\Models\resturant;
use App\Models\type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class orders_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resturants = resturant::with(['types'])
            ->whereHas('types', function (Builder $query) {
                $query->where('type_id', 3);
            })
            ->whereHas('types', function (Builder $query) {
                $query->where('type_id', 4);
            })
            ->get();
        file_put_contents('dump.json', $resturants);
    }
}
