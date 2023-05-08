<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    //Elemtos para validar
    static $rules=[
        'name'=>'required|string|min:3',
        'age'=>'required|integer|min:1',
        'weight_kg'=>'required|integer|min:1',
        'owner_id' =>'required|min:1',

    ];
    protected $perPage=5;

    /*registro de que existe una relacion
    en laravel. Se registra en el archivo que
    representa la tabla */
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
