<?php
require_once 'conexao.php';
require_once 'protecao.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID da receita não informado.";
    exit;
}

$stmt = $conexao->prepare("SELECT * FROM receitas WHERE id = ?");
$stmt->execute([$id]);
$receita = $stmt->fetch();

$categorias = $conexao->query("SELECT id, nome_categoria FROM categorias")->fetchAll();

if (!$receita) {
    echo "Receita não encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Receita</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class= "corpo">
    <div class="container">

        <h2>Editar Receita</h2>
        <form action="atualizar_receita.php" method="POST">
        <input type="hidden" name="id" value="<?= $receita['id'] ?>">

        <label>Título:</label>
        <input type="text" name="titulo" value="<?= $receita['titulo'] ?>" required class="input_user"><br>

        <label>Descrição:</label>
        <textarea name="descricao" required class="input_user"><?= $receita['descricao'] ?></textarea><br>

        <label>Modo de Preparo:</label>
        <textarea name="modo_preparo" required class="input_user"><?= $receita['modo_preparo'] ?></textarea><br>

        <label>Porção:</label>
        <input type="text" name="porcao" value="<?= $receita['porcao'] ?>" required class="input_user"><br>

        <label>Categoria:</label>
        <select name="id_categoria" required class="input_user">
            <?php
            foreach ($categorias as $cat) {
                $selected = $cat['id'] == $receita['id_categoria'] ? 'selected' : '';
                echo "<option value='{$cat['id']}' $selected>{$cat['nome_categoria']}</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Salvar Alterações" class="input_user_button">
         </form>

    </div>
   
</body>
</html>
