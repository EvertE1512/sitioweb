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
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
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
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
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
              <a href="./index.html" class="dropdown nav-link">
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
              <a href="./transacciones.html" class="dropdown nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Transacciones</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a href="./productos.html" class="dropdown nav-link">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Productos</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a href="#auth" class="dropdown nav-link">
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
              <center> <h2 class="mb-2 page-title">Lista de Productos</h2> </center>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                    
                   <center>
                    <button type="button" class="btn mb-2 btn-outline-success" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">Cadastrar Nuevo Producto</button>
                      <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                          <p class="h3 text-center mb-0" id="varyModalLabel">Detalles Del Producto</p>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                              </button>
                            </div>
                            <div class="modal-body">
                          <form class="needs-validation" novalidate>
                                <div class="form-group mb-4">
                            <label for="validationCustom3">Nombre Del Producto:</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                  <div class="valid-feedback"> Asigne un nombre para este producto </div>
                                </div>
                                
                                <div class="form-group mb-4">
                            <label for="validationCustom3">Valor Del Producto:</label>
                                  <input type="number" class="form-control" id="recipient-name">
                                  <div class="valid-feedback"> Asigne un valor para este producto</div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn mb-2 btn-primary">Cadastrar Produto</button>
                              </form>
                              <button type="button" class="btn mb-2 btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                          </div>
                        </div>
                    </center>
                    
                    
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Valor</th>
                           
<th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Colar</td>
                            <td>R$: 20,00</td>

<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Editar</a>
                                <a class="dropdown-item" href="#">Eliminar</a>
                              </div>
                            </td>
                            </tr>
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