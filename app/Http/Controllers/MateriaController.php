<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.indexMaterias', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.formMateria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
      //dd($request->all());
 
        /*
        $materia= new Materia();
        $materia->materia = $request->input('materia');
        $materia->seccion = $request->input('seccion');
        $materia->crn = $request->crn;
        $materia->salon = $request->salon;
        $materia->save();
        */

        Materia::create($request->all());
        
        return redirect()->route('materia.index');
               //$materia = $request->materias;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show( Materia $materium /*$id*/)
    {
        //$minMateria = Materia::find($id);
        return view ('materias.showMateria')->with(['mat' =>$materium]);
        //return view('materias.showMateria',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('materias.formEditMateria',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materium)
    {
        //
        $materium->delete();
        return redirect()->route('materia.index');  
    }
}
