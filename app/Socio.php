<?php

namespace asif;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $fillable = [
        'campo','user_id','nombre','apellido','direccion','email','telefono','dni','localidad_id','genero','nacimiento','estadoCivil','trabajo','amputado','equipado','obraSocial','deprote_id','trabajo_id',
    ];
}
