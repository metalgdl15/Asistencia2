@extends ('layouts.tema')
@section('contenido')
<h1> Listado de alumnos </h1>

<div class="row">
  <div class="col-md-12">
    <table>
      <thead>
        <tr>
          <th>ID </th>
          <th>Nombre</th>
          <th>Código</th>
          <th>Carrera</th>
        </tr>
      </thead>

      <tbody>
        
          <tr>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->Nombre }}</td>
            <td>{{ $alumno->Codigo }}</td>
            <td>{{ $alumno->Carrera }}</td>
          </tr>
        
      </tbody>
    </table>
  </div>


</div>

  <div class="card-body">
    <h1> listado de materias </h1>
    {!! Form::open(['route' => ['alumno.materia.store', $alumno->id]]) !!}
      {!! Form::label('materia', 'Materias') !!}
      <select name="materias">
        @foreach($materias as $materia)
          <option value="{{ $materia->id }}">{{ $materia->materia}}</option>
        @endforeach
      </select>
      <input type="submit" value="Aceptar" name="enviar">

    {!! Form::close() !!}

    <ul>
      @foreach($alumno->materias as $materia)
        <li>{{$materia->materia}}</li>
        <form action="{{ route('alumno.materia.destroy', [$alumno->id, $materia->id]) }}" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="DELETE">
            <label>{{$alumno->id}}</label>
            <input type="submit" value="Borrar"> 
        </form>
      @endforeach
    </ul>

  </div>


@endsection