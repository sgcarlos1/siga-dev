<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '24102410');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
