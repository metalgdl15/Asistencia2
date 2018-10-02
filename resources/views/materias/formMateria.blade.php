@extends ('layouts.tema')
@section('contenido')

<div class="row">
  <div clas="col-md-12">
      <div class="tile">
      <form action="{{ route('materia.store')}}" method="POST">
        {{ csrf_field() }}
         <div class="form-group">
            <label for="materia">Materia</label>
            <input name="materia"class="form-control" type="text" placeholder="Nombre de la materia">
            <small class="form-text text-muted">Los alumnos se inscribira a una materia.</small>
         </div>
        
         <div class="form-group">
            <label for="seccion">Seccion</label>
            <input name ="seccion"class="form-control" type="text">
         </div>
        
         <div class="form-group">
            <label for="crn">CRN</label>
            <input name="crn" class="form-control" type="text" placeholder="CRN/NRC">
         </div>
        
         <div class="form-group">
            <label for="salon">Salon</label>
            <input name="salon" class="form-control" type="text">
            <small class="form-text text-muted">Los alumnos se inscribira a una materia.</small>
         </div>
        
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
        
      </form>
    </div>
  </div>
</div>

@endsection