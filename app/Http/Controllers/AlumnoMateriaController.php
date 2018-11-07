<?php

namespace App\Http\Controllers;

use App\Materia;
use App\Alumno;
use Illuminate\Http\Request;

class AlumnoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function index(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function create(Alumno $alumno)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Alumno $alumno)
    {
        
        $materia_id = $request->materias;

        //$alumno->materias()->attach($materia_id);
        $materia = Materia::find($materia_id);
        $materia->alumnos()->attach($alumno->id);

        return redirect()->route('alumno.show',$alumno->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno, Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno, Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno, Materia $materium)
    {
        //dd($alumno);
        $alumno->materias()->detach($materium->id);   
    }
}
