<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resturant extends Model
{
    use HasFactory;

    public function types()
    {
        return $this->belongsToMany(type::class);
    }

    public function dishes()
    {
        return $this->hasMany(dish::class);
    }
}
