<?php
    session_start();
    $id=$_GET['id'];
    $fec_in=$_GET['fec_in'];
    $ven=$_GET['venc'];
    $cant=$_GET['cant'];
    $prod=$_GET['producto'];
    $emp=$_SESSION['id'];

    require "conect.php";

    $r="INSERT INTO lotes values('$id','$fec_in','$ven','$cant','$prod','$emp') && UPDATE productos SET prod_stock_actual=$cant WHERE prod_id=$prod";

    $resulset=mysqli_query($conn,$r);

    $b="SELECT*FROM productos WHERE prod_id='$prod'";

    $n=mysqli_query($conn,$b);

    while($fila=mysqli_fetch_assoc($n)){
        $a=$fila['prod_stock_actual'];
    }
    $a=$a+$cant;

    $res="UPDATE productos SET prod_stock_actual=$a WHERE prod_id=$prod";
    $resul=mysqli_query($conn,$res);


    if(mysqli_affected_rows($conn)>0){
        $_SESSION['mensaje'] = "El lote se cargo exitosamente";
        $_SESSION['tipo_mensaje'] = 'success';
        if ($resulset){
            header("location: lote.php");
        }
    }
    else{
        $_SESSION['mensaje'] = "No se pudo cargar el lote";
        $_SESSION['tipo_mensaje'] = 'danger';
        if ($resulset){
            header("location: lote.php");
        }
    }

?>