<?php
session_start();
include('conexao.php');
include('limpa_string.php');

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
    $row2 = mysqli_query($conexao, $pega_nivel);
    $row3 = mysqli_fetch_row($row2);
    $_SESSION['nivel_p'] = $row3[0];
    
    $pega_nome = "select nome from usuario where usuario='$usuario'";
    $row4 = mysqli_query($conexao, $pega_nome);
    $row5 = mysqli_fetch_row($row4);
    $_SESSION['nome_p'] = $row5[0];
    
    $pega_nascimento = "select nascimento from usuario where usuario='$usuario'";
    $row6 = mysqli_query($conexao, $pega_nascimento);
    $row7 = mysqli_fetch_row($row6);
    $_SESSION['nascimento_p'] = preg_replace('/_+/', ' ', $row7[0]);
    
    $pega_telefone = "select telefone from usuario where usuario='$usuario'";
    $row8 = mysqli_query($conexao, $pega_telefone);
    $row9 = mysqli_fetch_row($row8);
    $_SESSION['telefone_p'] = preg_replace('/_+/', ' ', $row9[0]);
    
    $pega_email = "select email from usuario where usuario='$usuario'";
    $row10 = mysqli_query($conexao, $pega_email);
    $row11 = mysqli_fetch_row($row10);
    $_SESSION['email_p'] = $row11[0];
    
    $pega_indicador = "select Indicador from usuario where usuario='$usuario'";
    $row12 = mysqli_query($conexao, $pega_indicador);
    $row13 = mysqli_fetch_row($row12);
    $_SESSION['indicador_p'] = $row13[0];

    $pega_endereco = "select endereco from usuario where usuario='$usuario'";
    $row14 = mysqli_query($conexao, $pega_endereco);
    $row15 = mysqli_fetch_row($row14);
    $_SESSION['endereco_p'] = $row15[0];
    
    header('location: escritorio.php');
    exit;
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: index.php');
}


exit();


