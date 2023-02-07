<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['tipoUsuario']==1){
//todo ok

}
else{
    echo"Pagina Prohibida. Inicie Sesion";
    exit();
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
    <ins><h1> PAGINA ADMINISTRADOR</h1></ins>
    <a href=logout.php><button>cerrar sesion</button></a>

    <div>
        <form>
            <br><br><input type=submit name=prod value="Nuevo Producto"><br><br>
            <input type=submit name=lab value="Nuevo laboratorio"><br><br>
            <input type=submit name=drog value="Nueva Droga"><br><br>
            <input type=submit name=lote value="Nuevo Lote"><br><br>
            <input type=submit name=emp value="Nuevo Empleado"><br><br>
        </form>
    </div>
    
</body>
</html>
<?php
if(isset($_GET['prod'])){
 require "producto.php";
}
 
if(isset($_GET['ALT'])){
 require "alta_prod.php";
      
}


if(isset($_GET['lab'])){
require "laboratorio.php";
}
if(isset($_GET['alta_lab'])){
    require "alta_lab.php";
 }


if(isset($_GET['emp'])){
    require "nuevoemp.php";
}

if(isset($_GET['alta'])){
    require "carga.php";
}

if(isset($_GET['drog'])){
    require "droga.php";
}

if(isset($_GET['car_dro'])){
    require "car_drog.php";
}

if(isset($_GET['lote'])){
    require "lote.php";
}

if(isset($_GET['alt_lote'])){
    require "alta_lote.php";
}

?>