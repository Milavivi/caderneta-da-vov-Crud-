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
</head>
<body>
    <h2>Editar Receita</h2>

    <form action="atualizar_receita.php" method="POST">
        <input type="hidden" name="id" value="<?= $receita['id'] ?>">

        <label>Título:</label>
        <input type="text" name="titulo" value="<?= $receita['titulo'] ?>" required><br>

        <label>Descrição:</label>
        <textarea name="descricao" required><?= $receita['descricao'] ?></textarea><br>

        <label>Modo de Preparo:</label>
        <textarea name="modo_preparo" required><?= $receita['modo_preparo'] ?></textarea><br>

        <label>Porção:</label>
        <input type="text" name="porcao" value="<?= $receita['porcao'] ?>" required><br>

        <label>Categoria:</label>
        <select name="id_categoria" required>
            <?php
            foreach ($categorias as $cat) {
                $selected = $cat['id'] == $receita['id_categoria'] ? 'selected' : '';
                echo "<option value='{$cat['id']}' $selected>{$cat['nome_categoria']}</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Atualizar Receita">
    </form>
</body>
</html>
