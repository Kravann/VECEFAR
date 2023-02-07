<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        Numero de Lote<input type=number name=id required><br><br>
        Fecha de Ingreso<input type=date name=fec_in required><br><br>
        Fecha de Vencimiento<input type=date name=venc required><br><br>
        Cantidad<input type=number name=cant required><br><br>
        Producto<select name=producto>
            <?php
            require "conect.php";
            $pro="SELECT * FROM productos INNER JOIN droga on productos.droga_id=droga.droga_id";
          
            $res=mysqli_query($conn,$pro);
            if(mysqli_affected_rows($conn)>0){
                while($fila=mysqli_fetch_assoc($res)){

            ?>

        <option value=<?php echo $fila["prod_id"] ?>><?php echo $fila["prod_marca"] ?> ,
         <?php echo $fila["dro_componentes"] ?>   <?php echo $fila["dro_dosis"] ?>  </option>

        <?php
            }
          }
        ?>
        </select><br><br>
        
        <input type=submit name=alt_lote value="Cargar Lote">

    </form>
</body>
</html>