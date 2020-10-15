<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) :
    header('location: index.php');
    exit();
endif;

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '$usuario' and senha = md5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    $pega_nivel = "select nivel from usuario where usuario='$usuario'";
    $pega_indicador = "select indicador from usuario where usuario='$usuario'";
    $_SESSION['indicador_p'] = mysqli_fetch_row(mysqli_query($conexao, $pega_indicador)); 
    $row2 = mysqli_query($conexao, $pega_nivel);
    $row3 = mysqli_fetch_row($row2);
    $_SESSION['nivel_p'] = $row3[0];
    header('location: escritorio.php');
    exit;
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: index.php');
}


exit();
