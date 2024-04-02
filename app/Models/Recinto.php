<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Recinto extends Model
{
    protected $fillable = [
        'capacidad',
        'nombre',
        'description',
    ];

    public function animals()
    {
        return $this->hasMany('App\Models\Animal');
    }
}
