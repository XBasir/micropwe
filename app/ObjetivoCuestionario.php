<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoCuestionario extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = "objetivo_cuestionario";
    protected $fillable = [
        'carrera_id', 'cuestionario_id'
    ];

}