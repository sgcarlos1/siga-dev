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
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo">
        <img class="card-img p-3" src="/siga-me-logo.png">
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
          <li class="nav-item">
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
          <li class="nav-item  active">
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
          <li class="nav-item ">
            <a class="nav-link" href="./meus_clientes.php">
              <i class="material-icons">supervisor_account</i>
              <p>Meus Clientes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./financeiro.php">
              <i class="material-icons">$</i>
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
        <div class="card col-md-10">
          <div class="card-header-primary">
            <h3>Cadastramento de consultor</h3>
          </div>

          <div class="card-body col-lg-12">
            <form action="cadastro_consultor.php" method="POST" autocomplete="off" id="cadast_form" name="cadast_form" onsubmit="validatePassword()">
              <div class="step" id="step_1">
                <div class="form-row">
                  <div class="alert alert-primary py-1">
                    <h4>Dados Pessoais<h4>
                  </div>

                  <div class="form-group col-md-12">
                    <i class="material-icons prefix">face</i>
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
                    <input name="cpf" class="form-control" id="cpf" type="text" placeholder="Ex.:000.000.000-00" required>
                  </div>

                  <div class="form-group col-md-6">
                    <i class="material-icons prefix">face</i>
                    <label for="nome">Nome</label>
                    <input name="nome" class="form-control" id="nome" type="text" placeholder="Exemplo:joao da silva" required>
                  </div>

                  <div class="form-group col-md-6">
                    <i class="material-icons prefix">calendar_today</i>
                    <label for="nascimento">Data de Nascimento</label>
                    <input name="nascimento" class="form-control" id="nascimento" type="date" required>
                  </div>

                  <div class="form-group col-md-6">
                    <i class="material-icons prefix">call</i>
                    <label for="telefone">Telefone</label>
                    <input name="telefone" class="form-control" id="telefone" type="tel" placeholder="(99) 9 9999-9999" required>
                  </div>

                  <div class="form-group col-md-6">
                    <i class="material-icons prefix">mail_outline</i>
                    <label for="email">E-mail</label>
                    <input name="email" class="form-control" id="email" type="email" placeholder="seuemail@mail.com" required>
                  </div>

                  <div class="form-group col-md-6">
                    <i class="material-icons prefix">mail_outline</i>
                    <label for="email">Confirme o E-mail</label>
                    <input name="email_confirm" class="form-control" id="email_confirm" type="email" placeholder="confirme seu email" required>
                  </div>
                </div>
              </div>

              <div class="step" id="step_2">
                <div class="form-row">
                  <div class="alert alert-primary py-1">
                    <h4>Dados de Endereço<h4>
                  </div>
                  <div class="form- group col-md-12"></div>
                  <div class="form-group col-md-3">
                    <i class="material-icons prefix">add_location</i>
                    <label for="cep" class="active">Cep</label>
                    <input class="form-control" type="tel" placeholder="Informe o Cep" id="cep" name="cep" required>
                  </div>

                  <div class="form-group col-md-3">
                    <i class="material-icons prefix">location_city</i>
                    <label for="uf" class="active">UF</label>
                    <input class="form-control" type="text" placeholder="UF" name="uf" id="uf" required>
                  </div>

                  <div class="form-group col-md-6"></div>

                  <div class="form-group col-md-3">
                    <i class="material-icons prefix">location_city</i>
                    <label for="cidade" class="active">Cidade</label>
                    <input class="form-control" type="text" placeholder="Cidade" id="cidade" name="cidade" required>
                  </div>

                  <div class="form-group col-md-3">
                    <i class="material-icons prefix">map</i>
                    <label for="bairro" class="active">Bairro</label>
                    <input class="form-control" type="text" placeholder="Bairro" name="bairro" id="bairro" required>
                  </div>

                  <div class="form-group col-md-6"></div>

                  <div class="form-group col-md-4">
                    <i class="material-icons prefix">my_location</i>
                    <label for="endereco" class="active">Endereço</label>
                    <input class="form-control" type="text" placeholder="Seu Endereço" name="logradouro" id="logradouro" required>
                  </div>

                  <div class="form-group col-md-2">
                    <i class="material-icons prefix">add_location</i>
                    <label for="nr_end" class="active">Número</label>
                    <input class="form-control" type="text" placeholder="Informe o número" name="nr_end" id="nr_end" required>
                  </div>
                </div>
              </div>

              <div class="step" id="step_3">

                <div class="alert alert-primary col-md-3 p-1">
                  <h4>Dados de Login<h4>
                </div>
                <div class="form- group col-md-12"></div>
                <div class="form-group col-md-4">
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
                    unset($_SESSION['usuario_existe']);
                  endif;

                  ?>

                  <input name="usuario" class="form-control" id="usuario" type="text" placeholder="Exemplo: joao123" required>
                </div>

                <div class="form-group col-md-4">
                  <i class="material-icons prefix">vpn_key</i>
                  <label for="senha">Senha</label>
                  <input name="senha" class="form-control" id="senha" type="password" placeholder="Sua senha" required>
                </div>

                <div class="form-group col-md-4">
                  <i class="material-icons prefix">vpn_key</i>
                  <label for="senha">Confirmar Senha</label>
                  <input name="confirma_senha" class="form-control" id="confirma_senha" type="password" placeholder="Sua senha" required>
                </div>

                <div class="form-group mx-auto">
                  <button class="btn btn-lg btn-primary align-items-center" type="submit">
                    <span>Enviar</span>
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </form>

            <?php
            if (isset($_SESSION['cadastro_sucedido'])) :
              echo "<script>alert('Cadastro bem sucedido');</script>";
              unset($_SESSION['cadastro_sucedido']);
            endif;
            ?>

            <div class="row">
              <div class="col-mg-6">
                <button class="btn btn-block btn-primary" id="prev">Anterior</button>
              </div>
              <div class="col-mg-6">
                <button class="btn btn-block btn-primary" id="next">Próximo</button>
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
        </div>
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
        <!-- your footer here -->
        <script>
          var senha = document.getElementById("senha"),
            confirma_senha = document.getElementById("confirma_senha");

          function validatePassword() {
            if (senha.value != confirma_senha.value) {
              confirma_senha.setCustomValidity("Senhas diferentes!");
              senha.autofocus;
            } else {
              confirma_senha.setCustomValidity("Senhas Iguais!");
            }
          }

          senha.onchange = validatePassword;
          confirma_senha.onkeyup = validatePassword;
        </script>
        <script src="/assets/js/procura_cep.js" type="text/javascript"></script>
        <script src="assets/js/form_fichas.js"></script>
    </div>
    </footer>
  </div>
  </div>
  </div>
  </div>
</body>

</html>