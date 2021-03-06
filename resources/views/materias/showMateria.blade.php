@extends ('layouts.tema')
@section('contenido')
<h1> Listado de materias </h1>

<div class="row">
  <div class="col-md-12">
    <table>
    <thead>
      <tr>
        <th>ID </th>
        <th>MATERIA</th>
        <th>CRN</th>
        <th>Salon</th>
        <th>Seccion</th>
        

      </tr>
    </thead>
    <tbody>
      
        <tr>
          
          <td>{{$mat->id}}</td>
          <td>{{$mat->materia}}</td>
          <td>{{$mat->crn}}</td>
          <td>{{$mat->salon}}</td>
          <td>{{$mat->seccion}}</td>
          

        </tr>
      
    </tbody>
    </table>
    
    <a class= "btn btn-warning" href="{{route ('materia.edit', $mat->id) }}"> Editar </a>
    <hr>

    <!-- Eliminar un registro-->
    <form action="{{route('materia.destroy', $mat->id)}}" method="POST">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
  </div>
</div>



<div>
  <h1> listado de Alumnos </h1>
    {!! Form::open (['route' => ['agregar', $mat->id]]) !!}
      {!! Form::label('alumno', 'Alumnos') !!}
      <!--<p>{{$mat->id}}</p>-->  
      <select name="alumno">
        @foreach($alumnos as $alumno)
          <option value="{{$alumno->id}}"> {{ $alumno->Nombre}} </option>
        @endforeach
      </select>
      <input type="submit" value="Aceptar" name="enviar">

    {!! Form::close() !!}

    <ul>
      @foreach($mat->alumnos as $al)
        <li>{{$al->Nombre}}</li>
        
      @endforeach
    </ul>
</div>
@endsection