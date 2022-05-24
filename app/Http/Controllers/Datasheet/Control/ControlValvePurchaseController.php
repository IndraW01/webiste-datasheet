<?php

namespace App\Http\Controllers\Datasheet\Control;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ControlValvePurchase;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreControlValvePurchaseRequest;
use App\Http\Requests\UpdateControlValvePurchaseRequest;

class ControlValvePurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.purchase.index', [
            'controlValvePurchases' => ControlValvePurchase::latest()->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasheet.control.purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControlValvePurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlValvePurchaseRequest $request)
    {
        $validateData = $request->validated();

        $jumlahData = ControlValvePurchase::query()->count();
        $validateData['datasheet'] = $jumlahData + 1;

        try {
            DB::beginTransaction();

            ControlValvePurchase::create($validateData);

            Alert::success('Berhasil', 'berhasil menambah data');

            DB::commit();

            return redirect()->route('datasheets.control.valve.purchase.index');
        } catch (Exception) {
            DB::rollBack();

            Alert::error('Gagal', 'gagal menambah data');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValvePurchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValvePurchase $purchase)
    {
        return view('datasheet.control.purchase.show', [
            'controlValvePurchase' => $purchase
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValvePurchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValvePurchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControlValvePurchaseRequest  $request
     * @param  \App\Models\ControlValvePurchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControlValvePurchaseRequest $request, ControlValvePurchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValvePurchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValvePurchase $purchase)
    {
        //
    }
}
