<?php

namespace App\Http\Controllers\Reservaespacio;

use App\Http\Controllers\Controller;
use App\Models\Reservaespacio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservaespacioRequest;
use App\Http\Requests\UpdateReservaespacioRequest;
class ReservaespacioController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservaespacio = Reservaespacio::all();
        return view('reservaespacio.index',compact('reservaespacio'));
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
    public function store(StoreReservaespacioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservaespacio $reservaespacio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservaespacio $reservaespacio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaespacioRequest $request, Reservaespacio $reservaespacio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservaespacio $reservaespacio)
    {
        //
    }
}
