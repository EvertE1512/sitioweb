<?php
include('../conexion/db.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Administrador de Finanzas</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="../css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../css/feather.css">
    <link rel="stylesheet" href="../css/select2.css">
    <link rel="stylesheet" href="../css/dropzone.css">
    <link rel="stylesheet" href="../css/uppy.min.css">
    <link rel="stylesheet" href="../css/jquery.steps.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="../css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="../css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="../css/app-dark.css" id="darkTheme">
  </head>
  
  <body class="vertical  dark  ">
    <div class="wrapper">
    
    
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>

        
        <ul class="nav">
        
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./configuraciones.html">
              <span class="fe fe-settings fe-16"></span>
            </a>
          </li>

        </ul>
      </nav>
      
      
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="admin.php">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="admin.php" class="dropdown nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Inicio</span>
              </a>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>MENU</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class="nav-item dropdown">
              <a href="./transacciones.php" class="dropdown nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Transacciones</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a href="./productos.php" class="dropdown nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Productos</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a href="cerrarseccion.php" class="dropdown nav-link">
                <i class="fe fe-shield fe-16"></i>
                <span class="ml-3 item-text">Salir</span>
              </a>
              </ul>
            </li>
            
        </nav>
      </aside>
      
      
      
              
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <center> <h2 class="mb-2 page-title">Lista de Transacciones</h2> </center>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                            <th>Cartera</th>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>Descripcion</th>
                            <th>Valor</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
<?php
$sqltrans="SELECT * FROM transacciones";
$result = mysqli_query($conexion, $sqltrans);

while($mostrar = mysqli_fetch_array($result)){

?>
                          <tr>
                            <td><?php echo $mostrar['cartera'] ?></td>
                            <td><?php echo $mostrar['categoria'] ?></td>
                            <td><?php echo $mostrar['producto'] ?></td>
                            <td><?php echo $mostrar['descripcion'] ?></td>
                            <td>R$: <?php echo $mostrar['valor'] ?>,00</td>
                            <td>
                             <a class="btn mb-2 btn-outline-info" href="editartransaccion.php?id=<?php echo $mostrar['id'] ?>"><span class="fe fe-edit fe-16"></span></a>
                            </td>

                            <td>
                              <form action="eliminartransaccion.php" method="post">
                              <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="id_trans">
                              <button class="btn mb-2 btn-outline-danger" type="submit" name="btneliminar"><span class="fe fe-trash-2 fe-16"></span></button>
                              </form>
                            </td>
                            </tr>
<?php
}
?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
      </main> <!-- main -->
                        
                        
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src='js/jquery.dataTables.min.js'></script>
    <script src='js/dataTables.bootstrap4.min.js'></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>