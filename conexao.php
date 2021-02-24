<?php

error_reporting(E_ALL ^E_NOTICE);

$endereco = 'localhost';
$usuario = 'root';
$senha = '';
$nomedb = 'priscilaleonor';

$conexao = mysqli_connect($endereco, $usuario, $senha, $nomedb);
