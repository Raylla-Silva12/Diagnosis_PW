<?php
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $ddd = $_GET['ddd'];
        $senha = $_GET['senha'];
        $selecao = $_GET['selecao'];
        $select = $_GET['select'];
        $telefone = $_GET['telefone'];

        setcookie ('nome', $nome, time()+3600);
        setcookie ('email', $email, time()+3600);
        setcookie ('ddd', $ddd, time()+3600);
        setcookie ('senha', $senha, time()+3600);
        setcookie ('selecao', $selecao, time()+3600);
        setcookie ('select', $select, time()+3600);
        setcookie ('telefone', $telefone, time()+3600);

    }

    session_start();

    $_SESSION['tipo'] = $_GET['tipo'];

    header('Location: comprovante.php');
?>  