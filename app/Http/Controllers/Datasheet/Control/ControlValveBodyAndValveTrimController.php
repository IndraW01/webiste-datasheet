<?php

namespace App\Http\Controllers\Datasheet\Control;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ControlValveBodyAndValveTrim;
use App\Http\Requests\StoreControlValveBodyAndValveTrimRequest;
use App\Http\Requests\UpdateControlValveBodyAndValveTrimRequest;

class ControlValveBodyAndValveTrimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.bodyAndTrim.index', [
            'controlValveBodyAndValveTrims' => ControlValveBodyAndValveTrim::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasheet.control.bodyAndTrim.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControlValveBodyAndValveTrimRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlValveBodyAndValveTrimRequest $request)
    {
        $validateData = $request->validated();

        try {
            DB::beginTransaction();

            ControlValveBodyAndValveTrim::create($validateData);

            Alert::success('Berhasil', 'berhasil menambah data');

            DB::commit();

            return redirect()->route('datasheets.control.valve.body.trim.index');
        } catch (Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'gagal menambah data');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValveBodyAndValveTrim  $bodyTrim
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValveBodyAndValveTrim $bodyTrim)
    {
        return view('datasheet.control.bodyAndTrim.show', [
            'controlValveBodyAndValveTrim' => $bodyTrim
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValveBodyAndValveTrim  $bodyTrim
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValveBodyAndValveTrim $bodyTrim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControlValveBodyAndValveTrimRequest  $request
     * @param  \App\Models\ControlValveBodyAndValveTrim  $bodyTrim
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControlValveBodyAndValveTrimRequest $request, ControlValveBodyAndValveTrim $bodyTrim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValveBodyAndValveTrim  $bodyTrim
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValveBodyAndValveTrim $bodyTrim)
    {
        //
    }
}
