<?php

namespace App\Http\Controllers;

use App\Dependencias;
use Illuminate\Http\Request;

class dependenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dependencias.indexDependencias');
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
     * @param  \App\Dependencias  $dependencias
     * @return \Illuminate\Http\Response
     */
    public function show(Dependencias $dependencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependencias  $dependencias
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependencias $dependencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependencias  $dependencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependencias $dependencias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependencias  $dependencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependencias $dependencias)
    {
        //
    }
}
