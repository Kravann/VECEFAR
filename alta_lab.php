<?php
    session_start();
    $id=$_GET['id'];
    $lab=$_GET['lab'];

    require "conect.php";

    $SQL="INSERT INTO laboratorios(lab_id,lab_nombre) values('$id','$lab')";

    $resulset=mysqli_query($conn,$SQL);


    if(mysqli_affected_rows($conn)>0){

        $_SESSION['mensaje'] = "El laboratorio $lab fue cargado con exito";
        $_SESSION['tipo_mensaje'] = 'success';
        if ($resulset){
            header("location: laboratorio.php");
        }
    }
    else{
        $_SESSION['mensaje'] = "No se pudo cargar el laboratorio $lab";
        $_SESSION['tipo_mensaje'] = 'danger';
        if ($resulset){
            header("location: laboratorio.php");
        }
    }
?>