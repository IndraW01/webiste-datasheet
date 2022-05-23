<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlValvePneumatic extends Model
{
    use HasFactory;

    protected $fillable = [
        'datasheet',
        'function',
        'output_signal',
        'control_modes',
        'output_action',
        'mounting',
        'weather_proof',
        'repeatabiity',
        'certifications',
        'hazardous',
        'suply_in',
        'instrument_gas',
        'filter_regulator',
        'controller_pneumatic',
        'suply',
        'output',
    ];
}
