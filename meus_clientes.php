<?php

include('verifica_login.php');

?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Siga-me!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->

      <div class="logo">
        <img class="card-img p-3" src="https://prix.org.br/wp-content/uploads/2020/05/logo-prix-clube-1.png">
        <a href="" class="simple-text logo-normal">
          <?php echo $_SESSION['usuario']; ?>
        </a>
      </div>

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./escritorio.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./minha_conta.php">
              <i class="material-icons">person</i>
              <p>Minha Conta</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./minha_rede.php">
              <i class="material-icons">bubble_chart</i>
              <p>Minha Rede</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./cadastrar_consultor.php">
              <i class="material-icons">group_add</i>
              <p>Cadastrar Consultor</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./cadastrar_cliente.php">
              <i class="material-icons">group_add</i>
              <p>Cadastrar Clientes</p>
            </a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="./meus_clientes.php">
              <i class="material-icons">supervisor_account</i>
              <p>Meus Clientes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./financeiro.php">
              <i class="material-icons">attach_money</i>
              <p>Financeiro</p>
            </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="minha_conta.php">Perfil</a>
                  <a class="dropdown-item" href="">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Sair</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <!-- Destaques -->
          <div class="card col-md-12">
            <div class="card-header card-header-success">
              <h1>Destaques da rede</h1>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nome</th>
                    <th>Carro</th>
                    <th>Cadastrado por</th>
                    <th class="text-rght">Placa</th>
                    <th class="text-right">Valor</th>
                    <th class="text-right">Estado de pagamento</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Andrew Mike</td>
                    <td>Tesla</td>
                    <td>Daniel</td>
                    <td>lsd-2354</td>
                    <td class="text-right">R$ 400,00</td>
                    <td class="td-actions text-right">
                      <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                        <i class="material-icons">done</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td>Marcos</td>
                    <td>Gol</td>
                    <td>Daniel</td>
                    <td>knw-2654</td>
                    <td class="text-right">R$ 280,00</td>
                    <td class="td-actions text-right">
                      <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                        <i class="material-icons">done</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td>Gabriel</td>
                    <td>Prisma</td>
                    <td>Daniel</td>
                    <td>kwn-3554</td>
                    <td class="text-right">R$ 290,00</td>
                    <td class="td-actions text-right">
                      <button class="btn btn-danger btn-fab btn-fab-mini btn-round">
                        <i class="material-icons">clear</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td>Roberto</td>
                    <td>Corola</td>
                    <td>Daniel</td>
                    <td>lll-8888</td>
                    <td class="text-right">R$ 330,00</td>
                    <td class="td-actions text-right">
                      <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                        <i class="material-icons">done</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">5</td>
                    <td>Michael</td>
                    <td>Amarok</td>
                    <td>Daniel</td>
                    <td>vmw-4453</td>
                    <td class="text-right">R$ 350,00</td>
                    <td class="td-actions text-right">
                      <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                        <i class="material-icons">done</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

      <footer class="footer">
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>
          <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
          <script src="../assets/js/core/jquery.min.js"></script>
          <script src="../assets/js/core/popper.min.js"></script>

          <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
          <!-- Plugin for the momentJs  -->
          <script src="../assets/js/plugins/moment.min.js"></script>
          <!--  Plugin for Sweet Alert -->
          <script src="../assets/js/plugins/sweetalert2.js"></script>
          <!-- Forms Validations Plugin -->
          <script src="../assets/js/plugins/jquery.validate.min.js"></script>
          <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
          <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
          <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
          <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
          <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
          <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
          <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
          <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
          <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
          <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
          <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
          <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
          <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
          <script src="../assets/js/plugins/fullcalendar.min.js"></script>
          <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
          <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
          <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
          <script src="../assets/js/plugins/nouislider.min.js"></script>
          <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
          <!-- Library for adding dinamically elements -->
          <script src="../assets/js/plugins/arrive.min.js"></script>
          <!--  Google Maps Plugin    -->
          <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
          <!-- Chartist JS -->
          <script src="../assets/js/plugins/chartist.min.js"></script>
          <!--  Notifications Plugin    -->
          <script src="../assets/js/plugins/bootstrap-notify.js"></script>
          <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
          <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
        </div>
        <!-- your footer here -->
      </footer>
    </div>
  </div>
</body>

</html>