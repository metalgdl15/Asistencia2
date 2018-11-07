<?php

namespace App\Http\Controllers;

use App\Materia;
use App\User;
use App\Alumno;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

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
        $request->validate(['materia'=>'required|min:5', 'seccion' => 'required|max:5', 'crn'=>'required|integer', 'salon'=>'required|max:20']);

        /*
        $materia= new Materia();
        $materia->user_id = \Auth::id();
        $materia->materia = $request->input('materia');
        $materia->seccion = $request->input('seccion');
        $materia->crn = $request->crn;
        $materia->salon = $request->salon;
        $materia->save();
        */

        //Guardar con relacion utilizando metodo save 
        $materia = new Materia($request->all());

        //obtenemos instancia (modelo) del usuario
        $user = User::find(\Auth::id());

        $user->materias()->save($materia);

        /*$request->merge(['user_id' => \Auth::id()]);
        //dd($request->all());

        Materia::create($request->all());
        */
        
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
        //return view ('materias.showMateria')->with(['mat' =>$materium]);

        $alumnos = Alumno::all();
        $mat= $materium;
        return view('materias.showMateria', compact('mat', 'alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materium)
    {
        return view('materias.formMateria')->with(['materia' => $materium]);
        //return view('materias.formEditMateria',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materium)
    {
        /*$materium->materia =$request->materia;
        $materium->crn =$request->crn;
        $materium->salon =$request->salon;
        $materium->seccion =$request->seccion;
        $materium->save();
        */
        Materia::where('id', $materium->id)->update($request->except('_token', '_method'));

        return redirect()->route('materia.show', $materium->id);
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

    public function AddAlumno (Request $request, $id){

        $materia = Materia::find($id);
        //$alumno = Alumno::find($request->alumnos);
        //$alumno->materias()->attach($materia->id);
        $materia->alumnos()->attach($request->alumno);
        
        return redirect()->back();
    }
}
