<?php

namespace App\Http\Controllers\Datasheet;

use App\Models\ControlValve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlValveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasheet.control.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlValve  $controlValve
     * @return \Illuminate\Http\Response
     */
    public function show(ControlValve $controlValve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlValve  $controlValve
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlValve $controlValve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ControlValve  $controlValve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlValve $controlValve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlValve  $controlValve
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlValve $controlValve)
    {
        //
    }
}
