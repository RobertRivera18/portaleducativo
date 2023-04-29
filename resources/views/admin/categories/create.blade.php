@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Crear nueva Categoria</h1>
@stop

@section('content')
<div class=" card ">
    <div class="card-body">
        {!!Form::open(['route'=>'admin.categories.store'])!!}
        <div class="form-group">
           {!! Form::label('name', 'Nombre') !!}
           {!! Form::text('name', null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la categoria']) !!}
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'slug') !!}
            {!! Form::text('slug', null,['class'=>'form-control','placeholder'=>'Ingresa el slug de la categoria','readonly']) !!}
            @error('slug')
            <span class="text-danger">{{$message}}</span>
        @enderror
         </div>

         <div class="form-group">
            <p class="font-weight-bold">Tipo de Publicacion</p>
            <label class="mr-2 text-secondary">
                {!! Form::radio('tipo_recurso_id', 1, true) !!}
                Post Educativo
            </label>
        
            <label class="text-secondary">
                {!! Form::radio('tipo_recurso_id', 2) !!}
                App Educativa
            </label>
        
            @error('status')
            <br>
            <span class="invalid-feedback d-block text-danger">{{$message}}</span>
            @enderror
        </div>
         {!! Form::submit('Crear Categoria',['class'=>'btn  btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"> </script>
<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
})
</script>
@endsection