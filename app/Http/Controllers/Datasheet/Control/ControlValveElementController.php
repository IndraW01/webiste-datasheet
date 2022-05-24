<?php

namespace App\Http\Controllers\Datasheet\Control;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Models\ControlValveElement;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreControlValveElementRequest;
use App\Http\Requests\UpdateControlValveElementRequest;

class ControlValveElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.element.index', [
            'controlValveElements' => ControlValveElement::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasheet.control.element.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControlValveElementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlValveElementRequest $request)
    {
        $validateData = $request->validated();

        $jumlahData = ControlValveElement::query()->count();
        $validateData['datasheet'] = $jumlahData + 1;

        try {
            DB::beginTransaction();

            ControlValveElement::create($validateData);

            Alert::success('Berhasil', 'berhasil menambah data');

            DB::commit();

            return redirect()->route('datasheets.control.valve.element.index');
        } catch (Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'gagal menambah data');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValveElement  $element
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValveElement $element)
    {
        return view('datasheet.control.element.show', [
            'controlValveElement' => $element
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValveElement  $element
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValveElement $element)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControlValveElementRequest  $request
     * @param  \App\Models\ControlValveElement  $element
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControlValveElementRequest $request, ControlValveElement $element)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValveElement  $element
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValveElement $element)
    {
        //
    }
}
