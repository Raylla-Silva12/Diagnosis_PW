<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Formulário - Correção</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <form method="GET" action="final.html">

                <!-- Conteúdo -->

                <h1>Imobiliária</h1>

                <div class="col-md-6 offset-md-3 col-12">
                    <input id="nome" name="nome" type="text" value=<?php echo $_COOKIE['nome'] ?> required>
                    <label for="nome">Nome</label>

                    <input id="email" name="email" type="email" value=<?php echo $_COOKIE['email'] ?> required>
                    <label for="email">E-mail</label>

                    <input id="senha" name="senha" type="password" value=<?php echo $_COOKIE['senha'] ?> required>
                    <label for="senha">Senha</label>

                    <div id="contato">
                        <input id="ddd" name="ddd" type="number" value=<?php echo $_COOKIE['ddd'] ?> required>
                        <label for="ddd">DDD</label>
                    </div>

                    <div id="contato2">
                        <input id="telefone" name="telefone" type="number" value=<?php echo $_COOKIE['telefone'] ?> required>
                        <label for="telefone">Telefone</label>
                    </div><br><br>

                    <!-- Tipo de Contato -->

                    <h2>Tipo de Contato</h2>

                    <div class="caixinha">
                        <div class="caixinha">
                            <input type="checkbox" name="tipo[]" value="Fixo" id="fixo">
                            <label for="fixo" class="label-checkbox">Fixo</label>
                        </div>

                        <div class="caixinha">
                            <input type="checkbox" name="tipo[]" value="Celular" id="celular">
                            <label for="celular" class="label-checkbox">Celular</label>
                        </div>

                        <div class="caixinha">
                            <input type="checkbox" name="tipo[]" value="Whatsapp" id="whatsapp" checked>
                            <label for="whatsapp" class="label-checkbox">Whatsapp</label>
                        </div>
                    </div>

                    <!-- Especificação da Compra -->

                    <h2>Especificação da Compra</h2>

                    <div class="caixinha">
                        <div class="caixinha">
                            <input type="radio" name="selecao" value="Comprar" id="comprar" checked>
                            <label for="comprar" class="label-radio">Comprar</label>
                        </div>

                        <div class="caixinha">
                            <input type="radio" name="selecao" value="Alugar Temporada" id="alugarT">
                            <label for="alugarT" class="label-radio">Alugar Temporada</label>
                        </div>

                        <div class="caixinha">
                            <input type="radio" name="selecao" value="Alugar Definitivo" id="alugarD">
                            <label for="alugarD" class="label-radio">Alugar Definitivo</label>
                        </div>
                    </div>

                    <!-- Tipo do Imóvel -->

                    <h2>Tipo do Imóvel</h2>
                    <select name="select" id="select">
                        <option value="Casa">Casa</option>
                        <option value="Sobrado">Sobrado</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Terreno">Terreno</option>
                        <option value="Salão Comercial">Salão Comercial</option>
                    </select>

                    <!-- Botões -->

                    <div class="mt-5 mb-5">
                        <button class="btn btn-block bg-primary text-white" name="avancar" onclick="cadUsuario()" type="submit">Confirmar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>