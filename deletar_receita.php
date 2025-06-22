<?php
require_once 'conexao.php';
require_once 'protecao.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID não informado.";
    exit;
}

try {
    $stmt = $conexao->prepare("DELETE FROM receitas WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: listar_receita.php");
} catch (PDOException $erro) {
    echo "Erro ao deletar receita: " . $erro->getMessage();
}
