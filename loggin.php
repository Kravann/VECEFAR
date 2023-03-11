<?php
  $nombre=$_GET['usuario'];
  $contra=$_GET['contra'];

  require "conect.php";

  $sql="SELECT * FROM empleados where emp_usu='$nombre'";

  $resulset=mysqli_query($conn,$sql);

  $registro=mysqli_fetch_assoc($resulset);

  if(mysqli_affected_rows($conn)>0){

    if($contra==$registro['emp_pass']){
      echo "iniciar sesion";
      session_start();
      $_SESSION['id']=$registro['emp_id'];
      $_SESSION['nombre']=$registro['emp_nom'];
      $_SESSION['tipoUsuario']=$registro['rol_id'];

      switch($registro['rol_id']){
        case 1:
          header("Location:admin.php");
          break;
        case 2:
          header("Location:empleado.php");
          break;
        default:
        break;          
      }
    }

    else {
        echo "La contraseña es incorrecta ";
    }

  }
  else {
      echo "No existe el usuario $nombre";
  }

?>