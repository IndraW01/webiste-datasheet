<?php

namespace App\Http\Controllers\Datasheet\Control;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ControlValvePneumatic;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreControlValvePneumaticRequest;
use App\Http\Requests\UpdateControlValvePneumaticRequest;

class ControlValvepneumaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.pneumatic.index', [
            'controlValvePneumatics' => ControlValvePneumatic::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasheet.control.pneumatic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControlValvePneumaticRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlValvePneumaticRequest $request)
    {
        $validateData = $request->validated();

        try {
            DB::beginTransaction();

            ControlValvePneumatic::create($validateData);

            Alert::success('Berhasil', 'berhasil menambah data');

            DB::commit();

            return redirect()->route('datasheets.control.valve.pneumatic.controller.index');
        } catch (Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'gagal menambah data');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValvePneumatic  $pneumaticController
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValvePneumatic $pneumaticController)
    {
        return view('datasheet.control.pneumatic.show', [
            'controlValvePneumatic' => $pneumaticController
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValvePneumatic  $pneumaticController
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValvePneumatic $pneumaticController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControlValvePneumaticRequest  $request
     * @param  \App\Models\ControlValvePneumatic  $pneumaticController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControlValvePneumaticRequest $request, ControlValvePneumatic $pneumaticController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValvePneumatic  $pneumaticController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValvePneumatic $pneumaticController)
    {
        //
    }
}
