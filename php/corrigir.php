<!DOCTYPE html>
<html>
<head>
	<title>Corrigir</title>
</head>
<body>
<form action="final.html" method="GET">
        <div class="container-fluid">
            <div class="col-md-6">
                <input id="nome" name="nome" type="text" required value=<?php echo $_COOKIE['nome'] ?>>
                <label for="nome">Nome</label>
                <br>
                <input id="email" name="email" type="email" required value=<?php echo $_COOKIE['email'] ?>>
                <label for="email">E-mail</label>
                <br>

                <input id="ddd" name="ddd" type="text" required value=<?php echo $_COOKIE['ddd'] ?>>
                <label for="ddd">DDD</label>
                <br>
                <input id="telefone" name="telefone" type="tel" required value=<?php echo $_COOKIE['telefone'] ?>>
                <label for="telefone">Telefone</label>
            </div>
            <br>
            <label for="tipo">Tipo: </label>

            <input type="checkbox" name="tipo[]" value="Fixo" id="fixo">
            <label for="fixo">Fixo: </label>

            <input type="checkbox" name="tipo[]" value="Celular" id="celular">
            <label for="celular">Celular: </label>

            <input type="checkbox" name="tipo[]" value="Whatsapp" id="whatsapp">
            <label for="whatsapp">Whatsapp: </label>
            <br>
            <br>
            <div class="col-md-6">
                <input id="senha" name="senha" type="password" required value=<?php echo $_COOKIE['senha'] ?>>
                <label for="senha">Senha</label>
            </div>
            <br>
            <div class="col-md-12">

                <label for="deseja">Deseja</label>
                <input type="radio" name="selecao" value="Comprar" id="comprar">
                <label for="comprar">Comprar: </label>

                <input type="radio" name="selecao" value="Alugar Temporada" id="alugarT">
                <label for="alugarT">Alugar Temporada: </label>

                <input type="radio" name="selecao" value="Alugar Definitivo" id="alugarD">
                <label for="alugarD">Alugar Definitivo: </label>
                <br>
                <label for="select">Tipo: </label>
                <select name="select" id="select">
                    <option value="Casa">Casa</option>
                    <option value="Sobrado">Sobrado</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Terreno">Terreno</option>
                    <option value="Salão Comercial">Salão Comercial</option>
                </select>
            </div>

            <div class="col-md-6">
                <input type="submit" name="avancar" value="Confirmar">
            </div>
        </div>
    </form>
<?
if (isset($_GET["avancar"])) {
        header('Location: final.html');
    }
?>

</body>
</html>