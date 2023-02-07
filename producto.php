<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ins><h3>Agregue el nuevo producto</h3></ins>
    <form>
       Id Producto<input type=number name=id required><br>
       Marca      <input type=text name=marca required><br>
       <!-- Stock Actual<input type=number name=actual required><br> -->
       Stock Minimo<input type=number name=min required><br>
       Comprimidos<input type=number name=comp required><br>
       Precio<input type=number name=pre  step="0.01" min="0" max="20000" required><br>
       Laboratorio <select name="lab_p">
        <?php
          require "conect.php";
          $lab="SELECT * FROM laboratorios";
          $res=mysqli_query($conn,$lab);
          
          if(mysqli_affected_rows($conn)>0){
            while($fila=mysqli_fetch_assoc($res)){
        ?>
        <option value=<?php echo $fila["lab_id"] ?>><?php echo $fila["lab_nombre"] ?></option>
        <?php
            }
          }
        ?>
       </select><br>
       Droga <select name="dro_p">
        <?php
          require "conect.php";
          $dro="SELECT * FROM droga";
          $res=mysqli_query($conn,$dro);
          
          if(mysqli_affected_rows($conn)>0){
            while($fila=mysqli_fetch_assoc($res)){
        ?>
        <option value=<?php echo $fila["droga_id"] ?>><?php echo $fila["dro_componentes"]?> <?php echo $fila["dro_dosis"]?></option>
        <?php
            }
          }
        ?>
       </select><br><br>
       
       <input type=submit name=ALT value="Cargar Producto">
    </form>
</body>
</html>
