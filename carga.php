<?php
$id=$_GET['id'];
$nom=$_GET['nom'];
$ape=$_GET['ape'];
$dni=$_GET['dni'];
$tel=$_GET['tel'];
$usu=$_GET['usu'];
$cont=$_GET['pass'];
$tipo=$_GET['tipo'];

require "conect.php";

$SQL="INSERT INTO empleados(emp_id,emp_nom,emp_ape,emp_dni,emp_tel,emp_usu,emp_pass,rol_id) 
values ('$id','$nom','$ape','$dni','$tel','$usu','$cont','$tipo')";

$resulset=mysqli_query($conn,$SQL);


if(mysqli_affected_rows($conn)>0){

    echo "El usuario $nom $ape  fue cargado con exito";
    
    }
    else{
    
    echo "No se pudo cargar al cliente $nom $ape";
    }

    header("location:nuevoemp.php");
?>