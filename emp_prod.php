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

include "header.php";
?>
<body>
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
	  <!-- <li>
        <a href="droga.php" class="nav-link text-white">
        <i class="fa-solid fa-capsules" width="16" height="16"></i>
          Nueva Droga
        </a>
      </li> -->
      <li>
        <a href="emp_lote.php" class="nav-link text-white">
        <i class="fa-solid fa-box" width="16" height="16"></i>
          Nuevo Lote
        </a>
      </li>
	  <!-- <li>
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
      </li> -->
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="imagenes/v.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>User</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">Mi perfil</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </div>

  <div class="b-example-divider b-example-vr"></div>

  <div class="container p-3">
    <div class="row">
      <div class="col12">
        <h1 style="margin-left: 434px;padding: 31px;">Nuevo Producto </h1>
      </div>
    </div>
    <div class="row">
      <form action="alta_prod.php">

        <div class="row">
            <div class="col-4" style="width: unset;"><input type=number name=id placeholder="Id Producto" required></div>
            <div class="col-4" style="width: unset;"><input type=text name=marca placeholder="Marca" required></div>
            <div class="col-4" style="width: unset;"><input type=text name=min placeholder="Stock Minimo" required></div>
            <div class="col-3" style="width: unset;"><input type=number name=comp placeholder="Comprimidos" required></div>
        </div>

        <div class="row">
          <div class="col-3">
            <label for="lab_p">Laboratorio</label>  
              <select name="lab_p" class="select">
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
              </select>
          </div>

            <div class="col-3" >
              <label for="dro_p">Droga</label>  
              <select name="dro_p" class="select">
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
              </select>
          </div>  
        </div>
        <button class="btn-info" type="submit">Cargar Producto</button>
      </form>
            </div>
        </div>
    </div>

</main>

<div class="col-sm-12">
      <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
              <?= $_SESSION['mensaje']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-top: 20px;padding: unset;"></button>
          </div>
      <?php }
    //session_unset(); ?>
    </div> 

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/5.3/examples/sidebars/sidebars.js"></script>

</body>
</html>
      
