<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    use HasFactory;
    protected $table='vehiculos';
    protected $primaryKey='id';
    protected $fillable=
        [
            'Placa','color','marca','tipo_vehiculo','conductor','propietario'


        ];

}
