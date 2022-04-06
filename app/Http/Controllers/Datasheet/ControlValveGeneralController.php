<?php

namespace App\Http\Controllers\Datasheet;

use Illuminate\Support\Facades\DB;

use App\Models\ControlValveGeneral;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreControlValveGeneralRequest;
use App\Http\Requests\UpdateControlValveGeneralRequest;
use Exception;

class ControlValveGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.general.index', [
            'controlValveGenerals' => ControlValveGeneral::latest()->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasheet.control.general.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControlValveGeneralRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlValveGeneralRequest $request)
    {
        $validateData = $request->validated();

        try {
            DB::beginTransaction();

            ControlValveGeneral::create($validateData);

            Alert::success('Berhasil', 'berhasil menambah data');

            DB::commit();

            return redirect()->route('datasheets.control.valve.index');
        } catch (Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'gagal menambah data');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValveGeneral  $controlValveGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValveGeneral $controlValveGeneral)
    {
        return view('datasheet.control.general.show', [
            'controlValveGeneral' => $controlValveGeneral
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValveGeneral  $controlValveGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValveGeneral $controlValveGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControlValveGeneralRequest  $request
     * @param  \App\Models\ControlValveGeneral  $controlValveGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControlValveGeneralRequest $request, ControlValveGeneral $controlValveGeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValveGeneral  $controlValveGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValveGeneral $controlValveGeneral)
    {
        //
    }
}
