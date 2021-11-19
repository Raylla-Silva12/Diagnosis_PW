<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário - Comprovante</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <form>

                <!-- Conteúdo -->

                <?php
                echo 'Nome: ' . $_COOKIE['nome'] . '<br>';
                echo 'Email: ' . $_COOKIE['email'] . '<br>';
                echo 'DDD: ' . '(' . $_COOKIE['ddd'] . ')<br>';
                echo 'Telefone: ' . $_COOKIE['telefone'] . '<br>';
                echo 'Senha: ' . $_COOKIE['senha'] . '<br>';
                echo 'Deseja: ' . $_COOKIE['selecao'] . '<br>';
                echo 'Tipo: ' . $_COOKIE['select'] . '<br>';
                echo 'Tipo de Telefone: ';


                session_start();

                $tipo = $_SESSION['tipo'];
                for ($i = 0; $i < count($tipo); $i++) {
                    echo $tipo[$i] . ' - ';
                }

                if (isset($_GET["corrigir"])) {
                    header('Location: corrigir.php');
                }

                if (isset($_GET["confirmar"])) {
                    header('Location: final.html');
                }
                ?>

                <form action="conexao.php" method="GET">
                    <input type="submit" name="confirmar" onclick="cadUsuario()" value="Confirmar">
                    <input type="submit" name="corrigir" value="Corrigir">
                </form>
</body>

</html>