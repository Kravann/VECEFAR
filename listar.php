<?php
    require "conect.php";
        $sql="SELECT * FROM lotes 
        INNER JOIN productos on lotes.prod_id=productos.prod_id
        INNER JOIN empleados on lotes.emp_id=empleados.emp_id";

    $resulset=mysqli_query($conn,$sql);
?>

<table>
    <thead>
        <tr>
            <th>Lote n°</th>
            <th>Fecha de Ingreso</th>
            <th>Vencimiento</th>
            <th>Cantidad </th>
            <th>Marca</th>
            <th>Cargado por</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($fila=mysqli_fetch_assoc($resulset)){
        ?>

        <tr>
            <td><?php echo $fila["lote_id"] ?></td>
            <td><?php echo $fila["lote_fec_ing"] ?></td>
            <td><?php echo $fila["lote_venci"] ?></td>
            <td><?php echo $fila["lote_cant"] ?></td>
            <td><?php echo $fila["prod_marca"] ?></td>
            <td><?php echo $fila["emp_nom"]?>  <?php echo $fila["emp_ape"]?></td>
        </tr>

        <?php
            }
        ?>
    </tbody>
</table>