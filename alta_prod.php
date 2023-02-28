<?php
session_start();
$id=$_GET['id'];
$marca=$_GET['marca'];
$act=0;
// $act=$_GET['actual'];
$min=$_GET['min'];
$comp=$_GET['comp'];
$pre=$_GET['pre'];
$lab=$_GET['lab_p'];
$dro=$_GET['dro_p'];

require "conect.php";

$s="INSERT INTO productos values('$id','$marca','$act','$min','$comp','$pre','$dro','$lab')";

$resulset=mysqli_query($conn,$s);


if(mysqli_affected_rows($conn)>0){

    $_SESSION['mensaje'] = "El producto de la marca $marca se cargo exitosamente";
    $_SESSION['tipo_mensaje'] = 'success';
    if ($resulset){
        header("location: producto.php");
    }
    
    }
    else{
   
    $_SESSION['mensaje'] = "No se pudo cargar el producto de $marca";
    $_SESSION['tipo_mensaje'] = 'danger';
    if ($resulset){
        header("location: producto.php");
    }
    }
    
?>