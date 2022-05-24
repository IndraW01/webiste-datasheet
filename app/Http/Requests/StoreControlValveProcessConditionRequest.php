<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreControlValveProcessConditionRequest extends FormRequest
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
            'component' => 'required',
            'cases' => 'required',
            'fluid' => 'required',
            'gas_flow' => 'required',
            'liquid_flow' => 'required',
            'upstream_pressure' => 'required',
            'downstream_pressure' => 'required',
            'design_pressure' => 'required',
            'operating_temperature' => 'required',
            'design_temperature' => 'required',
            'viscosity' => 'required',
            'density_ftp' => 'required',
            'molecular_weight' => 'required',
            'vapor_pressure_at' => 'required',
            'sp_heat_ratio' => 'required',
            'critical_pressure' => 'required',
            'critical_temperature' => 'required',
            'specific_gravity' => 'required',
            'calculated_cv' => 'required',
            'valve_opening' => 'required',
            'flash_cav_chocked' => 'required',
            'predicted_spl' => 'required',
        ];
    }
}
