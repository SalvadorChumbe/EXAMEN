@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('Bienvenido al sistema de preguntas y respuestas') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Se Mostrarán una serie de preguntas sobre Física, aquí!') }}

                </div>
            </div>

            <div class="card">

                    <form action="pregunta2" method = "POST">
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

            <?php

                        if(isset($_POST['pregunta2.blade.php'])){
                            $true = $_POST['true']; 
                            $false = $_POST['false'];

                            $answer = $false;
                            echo(answer);
                        }

            ?>

    </div>
</div>
@endsection
