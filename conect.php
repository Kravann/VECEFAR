<?php
    $servidorBD="localhost";
    $usuarioBD="root";
    $passBD="";
    $nombreBD="farmacia";

    $conn= mysqli_connect($servidorBD,$usuarioBD,$passBD,$nombreBD) or die ("No se pudo conectar");
?>