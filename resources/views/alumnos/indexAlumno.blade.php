@extends ('layouts.tema')
@section('contenido')
<h1> Listado de alumnos </h1>

<div class="row">
  <div class="col-md-12">
    <table>
      <thead>
        <tr>
          <th> ID </th>
          <th>Nombre</th>
          <th>Código</th>
          <th>Carrera</th>
        </tr>
      </thead>

      <tbody>
        @foreach($alumn as $al)
          <tr>
            <td>{{$al->ID}}</td>
            <td>{{$al->Nombre}}</td>
            <td>{{$al->Codigo}}</td>
            <td>{{$al->Carrera}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection