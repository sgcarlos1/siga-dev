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
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="cadastrar_cliente.php">
              <i class="material-icons">group_add</i>
              <p>Cadastrar Cliente</p>
            </a>
          </li>
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
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="content mt-5 pt-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Daniel</h4>
                  <p class="card-category">Fundador</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="patrocinador">Patrocinador</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="nome-usuario">Nome de usuário</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="email">Email</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="primeiro-nome">primeiro nome</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="ultimo-nome">Último nome</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="endereco">Endereço</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="cidade">Cidade</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="estado">Estado</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="cep">CEP</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right" for="salvar-dados">Salvar dados</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

            <div class="card" style="width: 20rem;">
              <div class="card-header card-header-info">
                Notificações
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Concluir cadastro de cliente x</li>
                <li class="list-group-item">Aniversário do consultor Y</li>
                <li class="list-group-item">Consultar pagamento de pontos</li>
              </ul>
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
        </div>
        <!-- your footer here -->
      </footer>
    </div>
  </div>
</body>

</html>