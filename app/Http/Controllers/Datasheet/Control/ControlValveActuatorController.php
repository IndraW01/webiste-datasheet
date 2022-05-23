<?php

namespace App\Http\Controllers\Datasheet\Control;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ControlValveActuator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreControlValveActuatorRequest;
use App\Http\Requests\UpdateControlValveActuatorRequest;

class ControlValveActuatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.actuator.index', [
            'controlValveActuators' => ControlValveActuator::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasheet.control.actuator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControlValveActuatorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlValveActuatorRequest $request)
    {
        $validateData = $request->validated();

        try {
            DB::beginTransaction();

            ControlValveActuator::create($validateData);

            Alert::success('Berhasil', 'berhasil menambah data');

            DB::commit();

            return redirect()->route('datasheets.control.valve.actuator.index');
        } catch (Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'gagal menambah data');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValveActuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValveActuator $actuator)
    {
        return view('datasheet.control.actuator.show', [
            'controlValveActuator' => $actuator
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValveActuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValveActuator $actuator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControlValveActuatorRequest  $request
     * @param  \App\Models\ControlValveActuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControlValveActuatorRequest $request, ControlValveActuator $actuator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValveActuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValveActuator $actuator)
    {
        //
    }
}
