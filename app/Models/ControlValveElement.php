<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlValveElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'datasheet',
        'element_type',
        'element_material',
        'body_material',
        'flange_material',
        'bolt_and_nut',
        'fill_fluid',
        'painting',
        'instrument_range',
        'calibration_range',
        'scale',
        'static_pressure',
        'model_no',
        'manufacture',
    ];
}
