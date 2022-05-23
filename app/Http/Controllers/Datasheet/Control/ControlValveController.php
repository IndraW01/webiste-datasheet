<?php

namespace App\Http\Controllers\Datasheet\Control;

use Illuminate\Http\Request;
use App\Models\ControlValveGeneral;
use App\Http\Controllers\Controller;
use App\Models\ControlValveActuator;
use App\Models\ControlValveBodyAndValveTrim;
use App\Models\ControlValveElement;
use App\Models\ControlValvePneumatic;
use App\Models\ControlValveProcessCondition;
use App\Models\ControlValvePurchase;

class ControlValveController extends Controller
{
    public function index()
    {
        return view('datasheet.control.index', [
            'controlValveGenerals' => ControlValveGeneral::latest()->limit(3)->get(),
            'controlValveProcessConditions' => ControlValveProcessCondition::latest()->limit(3)->get(),
            'controlValveBodyAndValveTrims' => ControlValveBodyAndValveTrim::latest()->limit(3)->get(),
            'controlValvePneumatics' => ControlValvePneumatic::latest()->limit(3)->get(),
            'controlValveActuators' => ControlValveActuator::latest()->limit(3)->get(),
            'controlValveElements' => ControlValveElement::latest()->limit(3)->get(),
            'controlValvePurchase' => ControlValvePurchase::latest()->limit(3)->get(),
        ]);
    }

    public function datasheet(int $id)
    {

    }
}
