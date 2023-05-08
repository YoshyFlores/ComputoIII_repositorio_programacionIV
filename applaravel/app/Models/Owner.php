<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    //indica que tiene mas de una mascota
    public function pets(){
        return $this->hasMany(Pet::class);
    }
}
