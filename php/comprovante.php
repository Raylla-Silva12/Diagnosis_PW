<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Comprovante</title> 
</head>
<body>
    
<?php
    echo 'Nome: '. $_COOKIE['nome'] . '<br>';
    echo 'Email: '. $_COOKIE['email'] . '<br>';
    echo 'DDD: '. '(' . $_COOKIE['ddd'] . ')<br>';
    echo 'Telefone: '. $_COOKIE['telefone'] . '<br>';
    echo 'Senha: '. $_COOKIE['senha'] . '<br>';
    echo 'Deseja: '. $_COOKIE['selecao'] . '<br>';
    echo 'Tipo: '. $_COOKIE['select'] . '<br>';
    echo 'Tipo de Telefone: ';
    

    session_start();
    
    $tipo = $_SESSION['tipo'];
    for($i = 0; $i < count($tipo); $i++){
        echo $tipo[$i] . ' - ';
    }

    if (isset($_GET["corrigir"])) {
        header('Location: corrigir.php');
    }
?>  
<form action="comprovante.php" method="GET">
    <input type="submit" name="confirmar" value="Confirmar">
    <input type="submit" name="corrigir" value="Corrigir">
</form>
</body>
</html>
