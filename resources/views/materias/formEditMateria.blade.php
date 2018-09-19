@extends ('layouts.app')
@section('content')
<h1> Listado de materias </h1>

<form action="/materia/update/{{ $id }}"  method="POST">
  <label for="materia">Materia: </label>
  <input type="text" name="materia" value="{{ $id }}">
  <input type="submit" value="Guardar">
</form>

@endsection