<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela inicial</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body id ="corpo_inicio">
   <?php require_once 'protecao.php'?>
        <header>
            <nav>
                <div id="nome_site">
                    <img src="./assets/img/logo.png" alt="logo do site" id="logo">
                    <h3>Caderneta da Vovó</h3>
                </div>

                <ul id="lista">
                    <li><a href="inicio.php">Início</a></li>
                    <li><a href="listar_receita.php">Receitas</a></li>
                    <li><a href="listar_categoria.php">Categoria</a></li>
                </ul>

                <form action="logout.php" id="form_logout">
                    <button type="submit" id="button_logout">Sair</button>
                </form>
            </nav>

        </header>

    <div id= "saudacao_inicio">
        <h3>Bem-vindo ao caderneta da vovó!!</h3>
        <p> veja as receitas disponiveis!!</p>
    </div>

    <div class="botao_cadastrar">
        <a href="cadastrar_receita.php">
            <button id="btn_cadastrar_receita">Cadastrar Receita</button>
        </a>
    </div>

    <div id="bloco_amostra">

        <div class="amostra_receita">
            <h4>Bolo da Vovó</h4>
            <button onclick="window.location.href='listar_receita.php?id=1'">Ver Receita</button>
        </div>

        <div class="amostra_receita">
            <h4>Pão Caseiro</h4>
            <button onclick="window.location.href='listar_receita.php?id=2'">Ver Receita</button>
        </div>

    </div>


 
</body>
</html>