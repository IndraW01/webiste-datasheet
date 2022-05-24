<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreControlValveBodyAndValveTrimRequest extends FormRequest
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
            'manufacturer' => 'required',
            'valve_body_type' => 'required',
            'body_size' => 'required',
            'end_connect_size' => 'required',
            'connect_type_rating' => 'required',
            'flange_face_finish' => 'required',
            'valve_rated_cv' => 'required',
            'body_material' => 'required',
            'plug_material' => 'required',
            'seat_material' => 'required',
            'seal_material' => 'required',
            'stem_material' => 'required',
            'bolt_nut_material' => 'required',
            'packing_type_material' => 'required',
            'flow_direction' => 'required',
            'shut_off' => 'required',
            'model_no' => 'required',
            'trim_charac' => 'required',
            'port_size' => 'required',
            'outlet' => 'required',
        ];
    }
}
