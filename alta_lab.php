<?php
$id=$_GET['id'];
$lab=$_GET['lab'];

require "conect.php";

$SQL="INSERT INTO laboratorios(lab_id,lab_nombre) values('$id','$lab')";

$resulset=mysqli_query($conn,$SQL);


if(mysqli_affected_rows($conn)>0){

    echo "El laboratorio $lab fue cargado con exito";
    
    }
    else{
    
    echo "No se pudo cargar el laboratorio $lab";
    }

?>