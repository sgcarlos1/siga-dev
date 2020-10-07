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
      <div class="content mt-4 pt-2">
        <div class="container-fluid">
          <!-- your content here -->
          <!-- Destaques -->
          <h1>Destaques da rede</h1>
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
                  <button class="btn btn-success btn-fab btn-fab-mini btn-round">
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
                  <button class="btn btn-success btn-fab btn-fab-mini btn-round">
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
                  <button class="btn btn-success btn-fab btn-fab-mini btn-round">
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
                  <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                    <i class="material-icons">done</i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>

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