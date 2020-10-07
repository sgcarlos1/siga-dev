<?php

include('verifica_login.php');

?>

<html lang="pt-br">

<head>
  <title>Siga-me!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons    -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag-->

      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <img class="card-img p-3" src="SIGA-ME-LOW-LOGO-PNG.png" rel="nofollow" alt="Card image cap">
        </a>
        <a href="" class="simple-text logo-normal">
          <?php echo $_SESSION['usuario']; ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="escritorio.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="minha_conta.php">
              <i class="material-icons">person</i>
              <p>Minha Conta</p>
            </a>
          <li class="nav-item active  ">
            <a class="nav-link" href="minha_rede.php">
              <i class="material-icons">bubble_chart</i>
              <p>Minha rede</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="cadastrar_consultor.php">
              <i class="material-icons">group_add</i>
              <p>Cadastrar Consultor</p>
            </a>
          <li class="nav-item active  ">
            <a class="nav-link" href="meus_clientes.php">
              <i class="material-icons">supervisor_account</i>
              <p>Meus Clientes</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="financeiro.php">
              <i class="material-icons">$</i>
              <p>Financeiro</p>
            </a>
          <li class="nav-item active  ">
            <a class="nav-link" href="biblioteca.php">
              <i class="material-icons">library_books</i>
              <p>Biblioteca</p>
            </a>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="escritorio.php">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="escritorio.php">
                <i class="material-icons">dashboard</i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="minha_conta.php">Profile</a>
                <a class="dropdown-item" href="configuracoes.php">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="content">

        <div class="container-fluid">
          <!-- your content here -->

          <div id="carouselSite" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/slide1.jpg" class="img-fluid d-block img-thumbnail">
              </div>

              <div class="carousel-item">
                <img src="assets/img/slide2.jpg" class="img fluid d-block img-thumbnail">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Avançar</span>
            </a>
          </div>

          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title"><?php echo $_SESSION['usuario']; ?></h4>
              <p class="card-text">Consultor nível:</p>
              <h1 class="card-text"><?php echo $_SESSION['nivel']; ?></h1>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>



          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-header card-header-text card-header-primary">
                  <div class="card-text">
                    <h4 class="card-title">Pontos Atuais</h4>
                  </div>
                </div>
                <div class="card-body">
                  <h3>1550 Pontos</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 2 minutes ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-header card-header-text card-header-info">
                  <div class="card-text">
                    <h4 class="card-title">Clientes em análise</h4>
                  </div>
                </div>
                <div class="card-body">
                  <h3>13 Clientes</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 2 minutes ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-text card-header-rose">
                  <div class="card-text">
                    <h4 class="card-title">Próxima meta</h4>
                  </div>
                </div>
                <div class="card-body">
                  <h2>Cadastro de 70 Clientes</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 2 minutes ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-chart card-header-warning">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Rede de clientes</h4>
                  <p class="h6"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55 </span> Novos clientes no mês</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-chart card-header-success">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Rede de consultores</h4>
                  <p class="h6">35 consultores ativos</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 2 minutes ago
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        </div>
        <!-- your footer here -->
      </footer>
    </div>
  </div>
</body>

</html>