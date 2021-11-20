<?php
session_start();
header('Location: comprovante.php');

$user = 'root';
$senha = 'usbw';
$servidor = 'localhost';
$banco = 'bd_imobiliaria';
$con = new mysqli($servidor, $user, $senha, $banco);

echo "Connected successfully";

$sql = "INSERT INTO tb_imobiliaria VALUES (null,'$nome', '$email', '$ddd', '$telefone', '$senha', '$selecao', '$select', '$tipo')";
$resultado = $GLOBALS['con']->query($sql);

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $ddd = $_POST['ddd'];
        $senha = $_POST['senha'];
        $selecao = $_POST['selecao'];
        $select = $_POST['select'];
        $telefone = $_POST['telefone'];

        setcookie ('nome', $nome, time()+3600);
        setcookie ('email', $email, time()+3600);
        setcookie ('ddd', $ddd, time()+3600);
        setcookie ('senha', $senha, time()+3600);
        setcookie ('selecao', $selecao, time()+3600);
        setcookie ('select', $select, time()+3600);
        setcookie ('telefone', $telefone, time()+3600);

    }

    $_SESSION['tipo'] = $_POST['tipo'];

   

    

