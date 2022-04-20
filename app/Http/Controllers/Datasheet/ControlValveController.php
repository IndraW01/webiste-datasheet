<?php

namespace App\Http\Controllers\Datasheet;

use Illuminate\Http\Request;
use App\Models\ControlValveGeneral;
use App\Http\Controllers\Controller;
use App\Models\ControlValveBodyAndValveTrim;

class ControlValveController extends Controller
{
    public function index()
    {
        return view('datasheet.control.index', [
            'controlValveGenerals' => ControlValveGeneral::latest()->limit(3)->get(),
            'controlValveBodyAndValveTrims' => ControlValveBodyAndValveTrim::latest()->limit(3)->get(),
        ]);
    }
}
