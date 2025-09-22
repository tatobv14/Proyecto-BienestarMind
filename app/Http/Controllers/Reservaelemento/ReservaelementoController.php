<?php

namespace App\Http\Controllers\Reservaelemento;

use App\Http\Controllers\Controller;
use App\Models\Reservaelemento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservaelementoRequest;
use App\Http\Requests\UpdateReservaelementoRequest;
class ReservaelementoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservaelemento = Reservaelemento::all();
        return view('reservaelemento.index',compact('reservaelemento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservaelementoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservaelemento $reservaelemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservaelemento $reservaelemento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaelementoRequest $request, Reservaelemento $reservaelemento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservaelemento $reservaelemento)
    {
        //
    }
}
