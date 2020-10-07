<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet"/>
    <title>Siga-me</title>
</head>

<body style="background-color: rgb(209, 202, 202);">

    <div class="card col-md-8 mx-auto">
        <div class="card-header-primary">
            <h2>Cadastramento de consultor</h2>
        </div>

        <div class="card-body">
            <form action="cadastrar.php" method="POST" autocomplete="off">
                <div class="form-row">

                    <div class="form-group col-md-12">
                        <i class="material-icons prefix">face</i>
                        <label for="indicador">Indicador</label>
                        <input name="indicador" class="form-control" id="indicador" readonly value="<?php echo $_GET['indicador']; ?>">
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



    <!-- JavaScript (Opcional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>