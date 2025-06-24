<?php
require_once 'conexao.php';
require_once 'protecao.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar receitas</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class= "corpo">

<?php
$pegar_categoria = $conexao->query("SELECT id, nome_categoria FROM categorias");
$categorias = $pegar_categoria->fetchAll();
?>

<div class="container">

    <h2>Cadastrar Receita</h2>
    <form action="receber_receita.php" method="POST">

        <label>Título da Receita:</label>
        <input type="text" name="titulo" required class="input_user"><br>

        <label>Descrição:</label>
        <textarea name="descricao" required class="input_user"></textarea><br>

        <label>Modo de Preparo:</label>
        <textarea name="modo_preparo" required class="input_user"></textarea><br>

        <label>Porção:</label>
        <input type="text" name="porcao" required class="input_user"><br>

        <label>Categoria:</label>
        <select name="id_categoria" required class="input_user">
            <option value="">Selecione</option>

            <?php
            if ($categorias) {
                foreach ($categorias as $cat) {
                    echo "<option value='{$cat['id']}'>{$cat['nome_categoria']}</option>";
                }
            } else {
                echo "<option value=''>Nenhuma categoria encontrada</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Cadastrar Receita" class="input_user_button">
    </form>

</div>

</body>
</html>

