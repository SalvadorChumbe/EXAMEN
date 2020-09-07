@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Bienvenido al portal de web de la F.E.UNAS!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Las actividades pendientes se visualizan aquí!') }}

                    <form action="">
                        <div class="forgroup">
                            <label for="comentario"> Escribe un comentario </label>
                            <input type="text" class="form-control" name=comentario>
                        </div>

                        <button type = "submit" class = "btn btn-primary">
                            Publicar Comentario
                        </button>

                    </form>

                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Publicado!') }}</div>

                <div class="card-body">
                    <p>
                          Comentario registrado exitosamente!!  
                    </p>
                </div>

                <div class="panelfooter">
                    <button class="btn btn-defautl">
                        Editar
                    </button>

                    <button class="btn btn-danger">
                        Eliminar
                    </button>

                </div>
                
            </div>
            <example-component> </example-component>

        </div>
    </div>
</div>
@endsection
