@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('Bienvenido al sistema de preguntas y respuestas. El tema es: FISICA') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Responda la alternativa correcta en la serie de preguntas mostradas aquí!') }}

                </div>
            </div>

            <div class="card">

                    <form action="guardar_respuestas" method = "POST">
                        <div class="formgroup">
                            <label for="titulo"> Responde: </label>
                            <label for="titulo"> 1. ¿La velocidad depende del tiempo? </label>
                           
                        </div> 

                        <button type = "submit" class = "btn btn-success" name = "true">
                            Verdadero
                        </button>

                        <button type = "submit" class = "btn btn-danger" name = "false">
                            Falso
                        </button>

                    </form>
            </div>

            <div class="card">

                    <form action="guardar_respuestas" method = "POST">
                        <div class="formgroup">
                            <label for="titulo"> Responde: </label>
                            <label for="titulo"> 2. La física es la ciencia basica que estudia los fenomenos de la naturaleza </label>
                           
                        </div> 

                        <button type = "submit" class = "btn btn-success" name = "true">
                            Verdadero
                        </button>

                        <button type = "submit" class = "btn btn-danger" name = "false">
                            Falso
                        </button>

                    </form>
            </div>

            <div class="card">

                    <form action="guardar_respuestas" method = "POST">
                        <div class="formgroup">
                            <label for="titulo"> Responde: </label>
                            <label for="titulo"> 3. La matematica es una herramienta fundamental de la física </label>
                           
                        </div> 

                        <button type = "submit" class = "btn btn-success" name = "true">
                            Verdadero
                        </button>

                        <button type = "submit" class = "btn btn-danger" name = "false">
                            Falso
                        </button>

                    </form>
            </div>

            <div class="card">

                    <form action="guardar_respuestas" method = "POST">
                        <div class="formgroup">
                            <label for="titulo"> Responde: </label>
                            <label for="titulo"> 4. El Big Bang es una Hipotesis</label>
                           
                        </div> 

                        <button type = "submit" class = "btn btn-success" name = "true">
                            Verdadero
                        </button>

                        <button type = "submit" class = "btn btn-danger" name = "false">
                            Falso
                        </button>

                    </form>
            </div>

    </div>
</div>
@endsection
