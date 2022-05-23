<?php

namespace App\Http\Controllers\Datasheet\Control;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ControlValveProcessCondition;
use App\Http\Requests\StoreControlValveProcessConditionRequest;
use App\Http\Requests\UpdateControlValveProcessConditionRequest;

class ControlValveProcessConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.processCondition.index', [
            'controlValveProcessConditions' => ControlValveProcessCondition::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasheet.control.processCondition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControlValveProcessConditionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlValveProcessConditionRequest $request)
    {
        $validateData = $request->validated();

        try {
            DB::beginTransaction();

            ControlValveProcessCondition::create($validateData);

            Alert::success('Berhasil', 'berhasil menambah data');

            DB::commit();

            return redirect()->route('datasheets.control.valve.process.condition.index');
        } catch (Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'gagal menambah data');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValveProcessCondition  $processCondition
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValveProcessCondition $processCondition)
    {
        return view('datasheet.control.processCondition.show', [
            'controlValveProcessCondition' => $processCondition
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValveProcessCondition  $processCondition
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValveProcessCondition $processCondition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControlValveProcessConditionRequest  $request
     * @param  \App\Models\ControlValveProcessCondition  $processCondition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControlValveProcessConditionRequest $request, ControlValveProcessCondition $processCondition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValveProcessCondition  $processCondition
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValveProcessCondition $processCondition)
    {
        //
    }
}
