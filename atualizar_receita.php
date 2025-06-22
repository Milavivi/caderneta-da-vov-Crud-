<?php
require_once 'conexao.php';
require_once 'protecao.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$modo_preparo = $_POST['modo_preparo'];
$porcao = $_POST['porcao'];
$id_categoria = $_POST['id_categoria'];

if (!empty($titulo) && !empty($descricao) && !empty($modo_preparo) && !empty($porcao) && !empty($id_categoria)) {
    try {
        $sql = "UPDATE receitas SET titulo = ?, descricao = ?, modo_preparo = ?, porcao = ?, id_categoria = ? WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$titulo, $descricao, $modo_preparo, $porcao, $id_categoria, $id]);

        header("Location: listar_receita.php");
    } catch (PDOException $erro) {
        echo "Erro ao atualizar: " . $erro->getMessage();
    }
} else {
    echo "Preencha todos os campos.";
}
