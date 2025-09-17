<?php

namespace App\Http\Controllers\Asesorium;

use App\Http\Controllers\Controller;
use App\Models\Asesorium;
use Illuminate\Http\Request;

class AsesoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesoriums = Asesorium::all();
        return view("asesorium.index", compact("asesoriums"));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Asesorium $asesorium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asesorium $asesorium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asesorium $asesorium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asesorium $asesorium)
    {
        //
    }
}
