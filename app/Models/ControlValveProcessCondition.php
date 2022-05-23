<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlValveProcessCondition extends Model
{
    use HasFactory;

    protected $fillable = [
        'datasheet',
        'component',
        'cases',
        'fluid',
        'gas_flow',
        'liquid_flow',
        'upstream_pressure',
        'downstream_pressure',
        'design_pressure',
        'operating_temperature',
        'design_temperature',
        'viscosity',
        'density_ftp',
        'molecular_weight',
        'vapor_pressure_at',
        'sp_heat_ratio',
        'critical_pressure',
        'critical_temperature',
        'specific_gravity',
        'calculated_cv',
        'valve_opening',
        'flash_cav_chocked',
        'predicted_spl',
    ];
}
