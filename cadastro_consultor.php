<?php
session_start();
include('limpa_string.php');
include('conexao.php');
include('valida_cpf.php');

$indicador = mysqli_real_escape_string($conexao, $_POST['indicador']);
$cpf = sanitizeString(mysqli_real_escape_string($conexao, $_POST['cpf']));
$nome = sanitizeString(mysqli_real_escape_string($conexao, $_POST['nome']));
$nascimento = sanitizeString(mysqli_real_escape_string($conexao, $_POST['nascimento']));
$telefone = sanitizeString(mysqli_real_escape_string($conexao, $_POST['telefone']));
$email = mysqli_real_escape_string($conexao, $_POST['email']);

$consul = $_POST['uf'] . '_' . $_POST['cidade'] . '_' . $_POST['bairro'] . '_' . $_POST['logradouro'] . '_' . $_POST['nr_end'] . '_' . sanitizeString($_POST['cep']);
$endereco = mysqli_real_escape_string($conexao, "$consul");

$usuario = sanitizeString(mysqli_real_escape_string($conexao, trim($_POST['usuario'])));
$senha = sanitizeString(mysqli_real_escape_string($conexao, trim(md5($_POST['senha']))));

if (isset($_SESSION['usuario'])) {
    if (validaCPF($cpf) == false) {
        $_SESSION['cpf_invalido'] = true;
        header('location: cadastrar_consultor.php');
        exit;
    }
} else {
    if (validaCPF($cpf) == false) {
        $_SESSION['cpf_invalido'] = true;
        header("location: cadastrar_consultor_externo.php?indicador=" . $indicador);
        exit;
    }
}

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "select count(*) as total2 from usuario where cpf = '$cpf'";
$result2 = mysqli_query($conexao, $sql2);
$row2 = mysqli_fetch_assoc($result2);

if (isset($_SESSION['usuario'])) {
    if ($row['total'] == 1) :
        $_SESSION['usuario_existe'] = true;
        header("location: cadastrar_consultor.php");
        exit;
    endif;
} else {
    if ($row['total'] == 1) :
        $_SESSION['usuario_existe'] = true;
        header("location: cadastrar_consultor_externo.php?=" . $indicador);
        exit;
    endif;
}

if (isset($_SESSION['usuario'])) {
    if ($row2['total2'] == 1) :
        $_SESSION['cpf_existe'] = true;
        header("location: cadastrar_consultor_externo.php?=" . $indicador);
        exit;
    endif;
} else {
    if ($row2['total2'] == 1) :
        $_SESSION['cpf_existe'] = true;
        header("location: cadastrar_consultor.php");
        exit;
    endif;
}

$query = "insert into usuario (cpf, indicador, usuario, senha, nome, nascimento, telefone, email, endereco) values ('$cpf', '$indicador','$usuario', '$senha', '$nome', '$nascimento', '$telefone', '$email', '$endereco')";

if ($conexao->query($query) === true) {
    $_SESSION['cadastro_sucedido'] = true;
    if (isset($_SESSION['usuario'])) {
        header('location: cadastrar_consultor.php');
        exit;
    } else {
        header('location: cadastrar_consultor_externo.php?indicador=' . $indicador);
        exit;
    }
} else {
    if (isset($_SESSION['usuario'])) {
        header('location: cadastrar_consultor.php');
        echo '<script>alert("Erro no cadastro");</script>';
        exit;
    } else {
        header('location: cadastrar_consultor_externo.php?indicador=' . $indicador);
        echo '<script>alert("Erro no cadastro");</script>';
        exit;
    }
}
exit;