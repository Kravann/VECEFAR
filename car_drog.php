<?php
    session_start();
    $id=$_GET['id'];
    $comp=$_GET['comp'];
    $dosis=$_GET['dosis'];

    require "conect.php";

    $SQL="INSERT INTO droga values('$id','$comp','$dosis')";

    $resulset=mysqli_query($conn,$SQL);


    if(mysqli_affected_rows($conn)>0){

        $_SESSION['mensaje'] = "La Droga $comp se cargo exitosamente";
        $_SESSION['tipo_mensaje'] = 'success';
        if ($resulset){
            header("location: droga.php");
        }
        
        }
    else{
        $_SESSION['mensaje'] = "No se pudo cargar la droga $comp";
        $_SESSION['tipo_mensaje'] = 'danger';
        if ($resulset){
            header("location: droga.php");
        }
    }
?>
