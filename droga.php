<?php
  session_start();
  if(isset($_SESSION['id']) && $_SESSION['tipoUsuario']==1){
  //todo ok

  }
  else{
    echo"Pagina Prohibida. Inicie Sesion";
?>
<br><br><a href="index.php">Iniciar sesion</a>
<?php   
  exit();
  }

  include "header.php";
?>

<html>
  <body>
  <main class="d-flex flex-nowrap">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <span class="fs-4"><a href="admin.php"><img src="imagenes/vecefar.png" alt="" style="width: 240px;"></a></span>

      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="producto.php" class="nav-link text-white" aria-current="page">
          <i class="fa-solid fa-table-list" width="16" height="16"></i>
            Nuevo Producto
          </a>
        </li>
      <li>
          <a href="droga.php" class="nav-link text-white active">
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

    <div class="container p-3">
              <div class="row">
                  <div class="col12">
                  <h1 style="margin-left: 434px;padding: 31px;">Nueva Droga</h1>
                  </div>
              </div>
              
              <div class="row">
                  <form action="car_drog.php">
                      <div class="row">
                        <div class="col-4" style="width: unset;"><input type=number name=id placeholder="cod Droga" required></div>
                        <div class="col-4" style="width: unset;"><input type=text name=comp placeholder="Componentes" required></div>
                        <div class="col-4" style="width: unset;"><input type=number name=dosis placeholder="Dosis 1.0" step="0.01" min="0" max="2000" required></div>
                        <button class="btn-info" type="submit" href="carga.php">Cargar Droga</button>
                    </form>
    
  </main>
  <div class="col-sm-12">
      <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
              <?= $_SESSION['mensaje']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-top: 20px;padding: unset;"></button>
          </div>
      <?php }
      // session_unset(); ?>
    </div> 
      
  <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/5.3/examples/sidebars/sidebars.js"></script>

  </body>
</html>