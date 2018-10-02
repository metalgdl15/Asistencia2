@extends ('layouts.app')
@section('content')
<h1> Listado de materias </h1>

<div class="row">
  <div class="col-md-12">
    <thead>
      <tr>
        <th> ID </th>
        <th>Usuario</th>
        <th>Nombre materia</th>
        <th>CRN</th>
        <th>Calandario</th>
        <th>hora inicio</th>
        <th>Salon</th>
      </tr>
    </thead>
    <tbody>
      @foreach($materias as $mat)
        <tr>
          <td>{{$mat->id}}</td>
          <td>{{$mat->user_id}}</td>
          <td>{{$mat->materia}}</td>
          <td>{{$mat->crn}}</td>
          <td>{{$mat->calendario}}</td>
          <td>{{$mat->hora_inicio}}</td>
          <td>{{$mat->salon}}</td>
        </tr>
      @endforeach
    </tbody>
    
  </div>
</div>
@endsection