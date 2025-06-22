<?php
require_once 'conexao.php';
require_once 'protecao.php';

if (!isset($_GET['id'])) {
    echo "ID inválido.";
    exit;
}

$id = $_GET['id'];

try {
    $sql = "SELECT * FROM categorias WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    $categoria = $stmt->fetch();

    if (!$categoria) {
        echo "Categoria não encontrada.";
        exit;
    }
} catch (PDOException $erro) {
    echo "Erro ao buscar categoria: " . $erro->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="corpo">
    <div class="container">
        <h2>Editar Categoria</h2>

        <form action="atualizar_categoria.php" method="POST">
            <input type="hidden" name="id" value="<?= $categoria['id'] ?>">

            <label>Nome da Categoria:</label>
            <input type="text" name="nome_categoria" class="input_user" value="<?= $categoria['nome_categoria'] ?>" required>

            <input type="submit" value="Salvar Alterações" class="input_user_button">
        </form>
    </div>
</body>
</html>
