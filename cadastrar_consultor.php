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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--     Fonts and icons    -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet"/>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag-->

      <div class="logo">

        <img class="card-img p-3" src="SIGA-ME-LOW-LOGO-PNG.png" rel="nofollow" alt="Card image cap">

        <a href="minha_conta.php" class="simple-text logo-normal">
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
          <div class="row">

            <div class="card col-md-8">

              <div class="card-header-primary">
                <h2>Cadastramento de consultor</h2>
              </div>

              <div class="card-body">
                <form action="cadastrar.php" method="POST" autocomplete="off">
                  <div class="form-row">

                    <div class="form-group col-md-12">
                      <i class="material-icons prefix">face</i>
                      <label for="indicador">Indicador</label>
                      <input name="indicador" class="form-control" id="indicador" readonly value="<?php echo $_SESSION['usuario']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">perm_identity</i>
                      <label for="cpf">CPF </label>
                      <?php
                      if (isset($_SESSION['cpf_invalido'])) :
                        echo "<script>alert('Erro no cadastro');</script>";
                      ?>
                        <div class="alert alert-danger ml-3 my-auto p-2" role="alert" style="display: inline">
                          CPF inválido
                        </div>
                      <?php
                      endif;
                      unset($_SESSION['cpf_invalido']);
                      ?>

                      <?php
                      if (isset($_SESSION['cpf_existe'])) :
                        echo "<script>alert('Erro no cadastro');</script>";
                      ?>
                        <div class="alert alert-danger ml-3 my-auto p-2" role="alert" style="display: inline">
                          CPF já regsitrado
                        </div>
                      <?php
                      endif;
                      unset($_SESSION['cpf_existe']);
                      ?>
                      <input name="cpf" class="form-control" id="cpf" type="text" placeholder="Ex.:000.000.000-00">
                    </div>

                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">face</i>
                      <label for="usuario">Usuario</label>
                      <?php
                      if (isset($_SESSION['usuario_existe'])) :
                        echo "<script>alert('Erro no cadastro');</script>";
                      ?>
                        <div class="alert alert-danger ml-5 my-auto p-2" role="alert" style="display: inline">
                          Usuario já registrado
                        </div>
                      <?php
                      endif;
                      unset($_SESSION['usuario_existe']);
                      ?>

                      <input name="usuario" class="form-control" id="usuario" type="text" placeholder="Exemplo: joao123">
                    </div>

                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">face</i>
                      <label for="senha">Senha</label>
                      <input name="senha" class="form-control" id="senha" type="password" placeholder="Sua senha">
                    </div>

                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">face</i>
                      <label for="nome">Nome</label>
                      <input name="nome" class="form-control" id="nome" type="text" placeholder="Exemplo:joao da silva">
                    </div>

                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">calendar_today</i>
                      <label for="nascimento">Data de Nascimento</label>
                      <input name="nascimento" class="form-control" id="nascimento" type="date">
                    </div>

                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">call</i>
                      <label for="telefone">Telefone</label>
                      <input name="telefone" class="form-control" id="telefone" type="tel" placeholder="(99) 9 9999-9999">
                    </div>


                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">mail_outline</i>
                      <label for="email">E-mail</label>
                      <input name="email" class="form-control" id="email" type="email" placeholder="seuemail@mail.com">
                    </div>

                    <div class="form-group col-md-6">
                      <i class="material-icons prefix">location_on</i>
                      <label for="endereco">Endereço</label>
                      <input name="endereco" class="form-control" id="endereco" type="text" placeholder="Rua lorem ipson, Nº432, Teresópolis-RJ">
                    </div>

                    <div class="form-group mx-auto">
                      <button class="btn btn-lg align-items-center" type="submit">
                        <span>Enviar</span>
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </div>
                </form>
                <?php
                if (isset($_SESSION['cadastro_sucedido'])) :
                  echo "<script>alert('Cadastro bem sucedido');</script>";
                endif;
                unset($_SESSION['cadastro_sucedido']);
                ?>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
          </div>
        </footer>
      </div>
    </div>
  </div>
  </div>
</body>

</html>