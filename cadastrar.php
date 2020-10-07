<?php
session_start();
include('conexao.php');
include('valida_cpf.php');

$indicador = mysqli_real_escape_string($conexao, $_POST['indicador']);
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$nascimento = mysqli_real_escape_string($conexao, $_POST['nascimento']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);

if(isset($_SESSION['usuario'])) {
    if(validaCPF($cpf) == false) { 
        $_SESSION['cpf_invalido'] = true;
        header('location: cadastrar_consultor.php');
        exit;
    }
} else {
    if(validaCPF($cpf) == false) {
        $_SESSION['cpf_invalido'] = true;
        header("location: cadastro.php?indicador=".$indicador);
        exit;
    }
}

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "select count(*) as total2 from usuario where cpf = '$cpf'";
$result2 = mysqli_query($conexao, $sql2);
$row2 = mysqli_fetch_assoc($result2);

if ($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header("location: cadastrar_consultor.php");
    exit;
    
}

if ($row2['total2'] == 1) {
    $_SESSION['cpf_existe'] = true;
    header("location: cadastrar_consultor.php");
    exit;
}

$query = "insert into usuario (cpf, indicador, usuario, senha, nome, nascimento, telefone, email, endereco) values ('$cpf', '$indicador','$usuario', '$senha', '$nome', '$nascimento', '$telefone', '$email', '$endereco')";

if($conexao->query($query)===true){
    $_SESSION['cadastro_sucedido'] = true;
    if(isset($_SESSION['usuario'])){
        header('location: cadastrar_consultor.php');
        exit; 
    } else {
        header('location: cadastro.php'. $_GET['indicador']);
        exit;
    }
    
}
