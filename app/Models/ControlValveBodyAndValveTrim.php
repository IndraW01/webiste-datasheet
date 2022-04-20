<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlValveBodyAndValveTrim extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer',
        'valve_body_type',
        'body_size',
        'end_connect_size',
        'connect_type_rating',
        'flange_face_finish',
        'valve_rated_cv',
        'body_material',
        'plug_material',
        'seat_material',
        'seal_material',
        'stem_material',
        'bolt_nut_material',
        'packing_type_material',
        'flow_direction',
        'shut_off',
        'model_no',
        'trim_charac',
        'port_size',
        'outlet',
    ];
}
