<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StoreControlValveGeneralRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'tag_no' => Str::replace(' ', '-', $this->tag_no),
            'p_id_number' => Str::replace(' ', '-', $this->p_id_number),
            'line_number' => Str::replace(' ', '-', $this->line_number),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tag_no' =>  'required|unique:control_valve_generals,tag_no',
            'p_id_number' => 'required|unique:control_valve_generals,p_id_number',
            'line_number' => 'required|unique:control_valve_generals,line_number',
            'line_size' => 'required',
            'valve_service_type' => 'required',
            'quantity' => 'required|numeric|integer|min:1',
            'service' => 'required',
            'piping_class' => 'required',
            'schedule' => 'required',
        ];
    }
}
