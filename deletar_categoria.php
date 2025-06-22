<?php
require_once 'conexao.php';
require_once 'protecao.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID não informado.";
    exit;
}

try {
    $stmt = $conexao->prepare("DELETE FROM categorias WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: listar_categoria.php");
} catch (PDOException $erro) {
    echo "Erro ao deletar categoria: " . $erro->getMessage();
}
