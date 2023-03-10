@extends('adminlte::page')

@section('title', 'Publicidad')

@section('content_header')
<div class="card bg-dark">
    <div class="card-body">
        <h4><b>NUEVA PUBLICIDAD</b></h4>
        <h5>Posición en el Carrusel: <b>{{$posicion}}</b></h5>
    </div>
</div>
@stop
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Formulario de laravel colective -->
            {!! Form::open(['route'=>'admin.publicidades.store', 'files'=>'true']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('Imagen', 'Imagen') !!}
                            <div class="row">
                                


                                <figure class="figure">

                                    
                                        <img  id="picture" src="https://images.pexels.com/photos/7383469/pexels-photo-7383469.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            class="figure-img img-fluid rounded img-thumbnail" alt="Portada de una publicidad"
                                            width="250px" height="250px">
                                   
        
        
                                    <figcaption class="figure-caption">Imagen para la portada de una publicidad.</figcaption>
                                </figure>


                            </div>
                            <div class="row">
                                <div class="form-group">
                                {!! Form::file('Imagen', ['class'=>'form-control-file', 'accept' => 'image/*']) !!}
                                </div>
                                <hr>
                                <p>Tamaño máximo de 5MB</p>
                                @error('Imagen')
                                <span class="text-danger">{{$message}}</span>
                                @enderror 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('Descripcion', 'Descripción') !!}
                            {!! Form::textarea('Descripcion', null, ['class'=>'form-control', 'placeholder'=>'Ingrese una descripcion de la Publicidad', 'style' => 'height : 100px']) !!}
                            @error('Descripcion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>    
                <div class="form-group">
                    {!! Form::label('Url', 'Url') !!}
                    {!! Form::text('Url', null, ['class'=>'form-control']) !!}
                    @error('Url')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>           
                
                {!! Form::submit('Registrar Publicidad', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        
    </div>

     
@stop

@section('js') 
<script>
    //Cambia la imagen predeterminada por la que se cargó
    document.getElementById("Imagen").addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }
</script>
@endsection
