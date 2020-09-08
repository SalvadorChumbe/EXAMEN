@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('Bienvenido al portal de web de la F.E.UNAS 2020!') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Las actividades pendientes se visualizan aquí!') }}

                </div>
            </div>

            <div class="card">

                    <form action="guardar_actividad.php" method = "POST">
                        <div class="formgroup">
                            <label for="titulo"> CREAR ACTIVIDAD</label>
                            <input type="text" class="form-control" name=titulo placeholder = "Titulo de actividad" autofocus>
                        </div>
                        
                        <div class="formgroup">
                            <input type="text" class="form-control" name=descripcion placeholder = "Descripcion" autofocus>
                        </div>    
                        
                        <div class="formgroup">
                            <input type="text" class="form-control" name=fecha placeholder = "fecha" autofocus>
                        </div>    

                        <div class="formgroup">
                            <input type="text" class="form-control" name=hora placeholder = "hora" autofocus>
                        </div>     

                        <div class="formgroup">
                            <input type="text" class="form-control" name=lugar placeholder = "lugar" autofocus>
                        </div> 

                        <div class="formgroup">
                            <input type="text" class="form-control" name=multa placeholder = "multa" autofocus>
                        </div> 

                        <button type = "submit" class = "btn btn-success" name = "agregar_actividad">
                            Agregar actividad
                        </button>

                        <button class="btn btn-secondary">
                            Editar
                        </button>

                        <button class="btn btn-danger">
                            Eliminar
                        </button>

                    </form>

            </div>

            <div class="card">

                <div class="formgroup">
                <example-component> </example-component>
                </div>

            </div>

            

    </div>
</div>
@endsection
