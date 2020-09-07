<?php

    if(isset($_POST['guardar_actividad'])){
        $title = $_POST['titulo']; 
        $description = $_POST['descripcion'];

        echo $title;
    }

?>