<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

use Illuminate\Notifications\Notifiable;

class Empleado extends MongoModel
{
    use Notifiable;


    protected $fillable = [
        'nombre',
        'primerApellido',
        'segundoApellido',
        'fechaNacimiento',
        'correoElectronico',
        'puesto',
        'skill' 
    ];

}
