<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreControlValveActuatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'datasheet' => 'required',
            'actuator' => 'required',
            'travel' => 'required',
            'bench' => 'required',
            'supply' => 'required',
            'air_supply' => 'required',
            'to_actuator' => 'required',
            'fails_valve' => 'required',
            'handwheel' => 'required',
            'hydrostatic' => 'required',
            'mounting' => 'required',
            'lockup' => 'required',
            'mechanical_position' => 'required',
            'mechanical_stopper' => 'required',
        ];
    }
}
