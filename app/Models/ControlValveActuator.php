<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlValveActuator extends Model
{
    use HasFactory;

    protected $fillable = [
        'datasheet',
        'actuator',
        'travel',
        'bench',
        'supply',
        'air_supply',
        'to_actuator',
        'fails_valve',
        'handwheel',
        'hydrostatic',
        'mounting',
        'lockup',
        'mechanical_position',
        'mechanical_stopper',
    ];
}
