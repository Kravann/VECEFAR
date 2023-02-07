<?php
$id=$_GET['id'];
$comp=$_GET['comp'];
$dosis=$_GET['dosis'];

require "conect.php";

$SQL="INSERT INTO droga values('$id','$comp','$dosis')";

$resulset=mysqli_query($conn,$SQL);


if(mysqli_affected_rows($conn)>0){

    echo "La Droga $comp se cargo exitosamente";
    
    }
    else{
    
    echo "No se pudo cargar la droga $comp ";
    }
?>
