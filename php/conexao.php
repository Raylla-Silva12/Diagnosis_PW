<?php
session_start();

$user = 'root';
$senha = 'usbw';
$servidor = 'localhost';
$banco = 'bd_imobiliaria';
$con = new mysqli($servidor, $user, $senha, $banco);

echo "Connected successfully";

    $sql = 'insert into tb_imobiliaria values (null, "'.$_COOKIE['nome'].'", "'.$_COOKIE['$email'].'", "'.$_COOKIE['$ddd'].'", "'.$_COOKIE['$telefone'].'", "'.$_COOKIE['$senha'].'", "'.$_COOKIE['$selecao'].'", "'.$_COOKIE['$select'].'", "'.$_COOKIE['$tipo'].'")';
    

