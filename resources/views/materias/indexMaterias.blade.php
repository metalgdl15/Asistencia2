@extends ('layouts.tema')
@section('contenido')
<h1> Listado de materias </h1>

<div class="row">
  <div class="col-md-12">
    <table>

    <thead>
      <tr>
        <th> ID </th>
        <th>Materia</th>
        <th>Seccion</th>
        <th>CRN</th>
        <th>Salon</th>
      </tr>
    </thead>

    <tbody>
     @foreach($materias as $mat)
      <tr>
        <td>
          <a class="btn btn-sm bt-info btn-primary" href ="{{route('materia.show', $mat->id)}}"> {{$mat->id}} </a>
        </td>
        <td>{{$mat->materia}}</td>
        <td>{{$mat->seccion}}</td>
        <td>{{$mat->crn}}</td>
        <td>{{$mat->salon}}</td>
      </tr>
      @endforeach
    </tbody>

  </table>
  </div>
</div>
@endsection