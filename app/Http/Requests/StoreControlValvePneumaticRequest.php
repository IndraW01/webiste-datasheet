<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreControlValvePneumaticRequest extends FormRequest
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
            'function' => 'required',
            'output_signal' => 'required',
            'control_modes' => 'required',
            'output_action' => 'required',
            'mounting' => 'required',
            'weather_proof' => 'required',
            'repeatabiity' => 'required',
            'certifications' => 'required',
            'hazardous' => 'required',
            'suply_in' => 'required',
            'instrument_gas' => 'required',
            'filter_regulator' => 'required',
            'controller_pneumatic' => 'required',
            'suply' => 'required',
            'output' => 'required',
        ];
    }
}
