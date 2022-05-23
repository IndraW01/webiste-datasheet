<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ControlValveGeneral extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'datasheet',
        'tag_no',
        'p_id_number',
        'line_number',
        'line_size',
        'valve_service_type',
        'quantity',
        'service',
        'piping_class',
        'schedule',
    ];

    public function tagNo():Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::upper($value),
        );
    }

    public function pIdNumber():Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::upper($value),
        );
    }

    public function lineNumber():Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::upper($value),
        );
    }
}
