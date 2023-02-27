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
        <a href="producto.php" class="nav-link active" aria-current="page">
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
        <a href="lote.php" class="nav-link text-white">
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

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/5.3/examples/sidebars/sidebars.js"></script>

</body>
</html>
