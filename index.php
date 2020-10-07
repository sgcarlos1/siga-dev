<?php
session_start();
if (isset($_SESSION['usuario'])) :
  header('location: escritorio.php');
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Siga-me</title>
</head>

<body style="background-color: rgb(209, 202, 202);">

  <div class="card mx-auto mt-5" style="width: 18rem;">
    <img class="card-img-top" src="https://siga-me.org/wp-content/uploads/2020/06/WhatsApp-Image-2020-05-29-at-09.23.29.jpeg" alt="Imagem de capa do card">
    <div class="card-body shadow">

      <?php
      if (isset($_SESSION['nao_autenticado'])) :
      ?>
        <div class="alert alert-danger mx-auto" role="alert">
          <p>Usuário ou senha inválidos.</p>
        </div>
      <?php
      endif;
      unset($_SESSION['nao_autenticado']);
      ?>

      <form action="login.php" method="POST">
        <div class="form-group">
          <label>Login</label>
          <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Login">
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg btn-block">Entrar</button>
      </form>
    </div>
  </div>

  <!-- JavaScript (Opcional) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>