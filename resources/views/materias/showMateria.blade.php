@extends ('layouts.tema')
@section('contenido')
<h1> Listado de materias </h1>

<div class="row">
  <div class="col-md-12">
    <table>
    <thead>
      <tr>
        <th> ID </th>
        <th>Usuario</th>
        <th>Nombre materia</th>
        <th>CRN</th>

      </tr>
    </thead>
    <tbody>
      
        <tr>
          
          <td>{{$mat->id}}</td>
          <td>{{$mat->user_id}}</td>
          <td>{{$mat->materia}}</td>
          <td>{{$mat->crn}}</td>

        </tr>
      
    </tbody>
    </table>
    
    <!-- Eliminar un registro-->
    <form action="{{route('materia.destroy', $mat->id)}}" method="POST">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
  </div>
</div>
@endsection