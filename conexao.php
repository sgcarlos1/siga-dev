<?php
define('HOST', 'mysql669.umbler.com:41890');
define('USUARIO', 'sgcarlos');
define('SENHA', 'Carlos2410');
define('DB', 'sigame');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');