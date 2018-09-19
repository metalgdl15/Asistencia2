@extends ('layouts.app')
@section('content')
<h1> Listado de materias </h1>

<form action="/materia/store"  method="POST">
  <label for="materia">Materia: </label>
  <input type="text" name="materia">
  <input type="submit" name="Guardar">
</form>

@endsection