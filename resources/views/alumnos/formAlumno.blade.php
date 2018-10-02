@extends ('layouts.tema')
@section('contenido')

<div class="row">
  <div clas="col-md-12">
      <div class="tile">
      <form action="{{ route('alumno.store') }}" method="POST">
        {{ csrf_field() }}
         <!--
         <div class="form-group">
            <label for="idAlumno">ID</label>
            <input name="idAlumno"class="form-control" type="text">
         </div>
     	-->
        
         <div class="form-group">
            <label for="nombre">Nombre</label>
            <input name ="nombre" class="form-control" type="text">
         </div>
        
         <div class="form-group">
            <label for="codigo">Código</label>
            <input name="codigo" class="form-control" type="text">
         </div>
        
         <div class="form-group">
            <label for="carrera">Carrera</label>
            <input name="carrera" class="form-control" type="text">
            <small class="form-text text-muted">Se inscribira un alumno</small>
         </div>
        
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit">Inscribir</button>
        </div>
        
      </form>
    </div>
  </div>
</div>

@endsection