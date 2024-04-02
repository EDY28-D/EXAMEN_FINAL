<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Cuidador extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        'especialidad',
    ];

    public function cuidadoranimals()
    {
        return $this->hasMany('App\Models\CuidadorAnimal');
    }
}