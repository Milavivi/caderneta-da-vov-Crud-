<?php
require_once 'conexao.php';
require_once 'protecao.php';

$id = $_POST['id'];
$nome_categoria = $_POST['nome_categoria'];

if (!empty($id) && !empty($nome_categoria)) {
    try {
        $sql = "UPDATE categorias SET nome_categoria = ? WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, $nome_categoria);
        $stmt->bindValue(2, $id);

        if ($stmt->execute()) {
            header("Location: listar_categoria.php");
        } else {
            echo "Erro ao atualizar categoria.";
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
} else {
    echo "Preencha todos os campos.";
}
?>
