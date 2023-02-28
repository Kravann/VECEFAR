<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['tipoUsuario']==2){
//todo ok

}
else{
    echo"Pagina Prohibida. Inicie Sesion";?>
    <br><br><a href="index.php">Iniciar sesion</a>
 <?php   exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PAGINA EMPLEADO</h1>
    <a href=logout.php><button>cerrar sesion</button></a>
</body>
</html>