@extends ('layouts.tema')
@section('contenido')

<div class="row">
  <div clas="col-md-12">
      <div class="tile">

        @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
        @endif

        @if(isset($materia))
          {!! Form::model($materia, ['route' => ['materia.update', $materia->id], 'method' => 'PATCH']) !!}
          <!--<fotm action="{{ route('materia.update', '$materia->id')}}" method="POST">-->
          <!--<input type="hidden" name="_method" value="PATCH">-->

        @else
          {!! Form::open(['route' => 'materia.store']) !!}
          <!--<form action="{{ route('materia.store')}}" method="POST"> -->

        @endif

        {{ csrf_field() }}
         <div class="form-group">
            <label for="materia">Materia</label>
            {!! Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la materia']) !!}

            <!--<input name="materia" value="{{ isset($materia) ? $materia->materia : '' }}" class="form-control" type="text" placeholder="Nombre de la materia">-->

            <small class="form-text text-muted">Los alumnos se inscribira a una materia.</small>
         </div>
        
         <div class="form-group">
            <label for="seccion">Seccion</label>
            {!! Form::text('seccion', null, ['class' => 'form-control']) !!}
            <!--<input name ="seccion"class="form-control" type="text"> -->
         </div>
        
         <div class="form-group">
            <label for="crn">CRN</label>
            {!! Form::text('crn', null, ['class' => 'form-control']) !!}
            <!--<input name="crn" class="form-control" type="text" placeholder="CRN/NRC">-->
         </div>
        
         <div class="form-group">
            <label for="salon">Salon</label>
            {!! Form::text('salon', null, ['class' => 'form-control']) !!}
            <!--<input name="salon" class="form-control" type="text">-->
            <small class="form-text text-muted">Los alumnos se inscribira a una materia.</small>
         </div>
        
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
        
      <!--</form> -->
    </div>
  </div>
</div>

@endsection