<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    use HasFactory;

    public function resturant()
    {
        return $this->belongsTo(resturant::class);
    }
}
