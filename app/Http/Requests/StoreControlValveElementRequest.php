<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreControlValveElementRequest extends FormRequest
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
            'element_type' => 'required',
            'element_material' => 'required',
            'body_material' => 'required',
            'flange_material' => 'required',
            'bolt_and_nut' => 'required',
            'fill_fluid' => 'required',
            'painting' => 'required',
            'instrument_range' => 'required',
            'calibration_range' => 'required',
            'scale' => 'required',
            'static_pressure' => 'required',
            'model_no' => 'required',
            'manufacture' => 'required',
        ];
    }
}
