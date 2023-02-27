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
<?php include "header.php"; ?>

<main class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
      <span class="fs-4"><img src="imagenes/vecefar.png" alt="" style="width: 240px;"></span>

    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="producto.php" class="nav-link text-white" aria-current="page">
        <i class="fa-solid fa-table-list" width="16" height="16"></i>
          Nuevo Producto
        </a>
      </li>
	  <li>
        <a href="droga.php" class="nav-link text-white">
        <i class="fa-solid fa-capsules" width="16" height="16"></i>
          Nueva Droga
        </a>
      </li>
      <li>
        <a href="lote.php" class="nav-link text-white active">
        <i class="fa-solid fa-box" width="16" height="16"></i>
          Nuevo Lote
        </a>
      </li>
	  <li>
        <a href="laboratorio.php" class="nav-link text-white">
        <i class="fa-solid fa-industry" width="16" height="16"></i>
          Nuevo laboratorio
        </a>
      </li>
      <li>
        <a href="nuevoemp.php" class="nav-link text-white">
            <i class="fa-solid fa-user-plus" width="16" height="16"></i>
          Nuevo Empleado
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="imagenes/v.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Admin</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">Mi perfil</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </div>

  <div class="b-example-divider b-example-vr"></div>

</main>


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

    
<script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/5.3/examples/sidebars/sidebars.js"></script>

</body>
</html>