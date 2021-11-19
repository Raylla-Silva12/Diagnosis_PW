<?php

$user = 'root';
$senha = 'usbw';
$servidor = 'localhost';
$banco = 'bd_imobiliaria';
$con = new mysqli($servidor, $user, $senha, $banco);

echo "Connected successfully";

    $sql = "INSERT INTO tb_imobiliaria VALUES (null,'$nome', '$email', '$ddd', '$telefone', '$senha', '$selecao', '$select', '$tipo')";
    $resultado = mysqli_query($con, $sql);
    $resultado = $GLOBALS['con']->query($sql);
?>