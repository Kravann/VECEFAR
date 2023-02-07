<?php
$id=$_GET['id'];
$fec_in=$_GET['fec_in'];
$ven=$_GET['venc'];
$cant=$_GET['cant'];
$prod=$_GET['producto'];
$emp=$_SESSION['id'];
$total=0;
require "conect.php";

$r="INSERT INTO lotes values('$id','$fec_in','$ven','$cant','$prod','$emp')";


$resulset=mysqli_query($conn,$r);


if(mysqli_affected_rows($conn)>0){

    echo "El lote se cargo exitosamente";
    
    }
    else{
    echo "No se pudo cargar el lote";
    }



?>