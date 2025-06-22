<?php
require_once 'conexao.php';
require_once 'protecao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$modo_preparo = $_POST['modo_preparo'];
$porcao = $_POST['porcao'];
$id_categoria = $_POST['id_categoria'];
$id_usuario = $_SESSION['sessao_user'];

if (!empty($titulo) && !empty($descricao) && !empty($modo_preparo) && !empty($porcao) && !empty($id_categoria)) {
    try {
        $sql = "INSERT INTO receitas (titulo, descricao, modo_preparo, porcao, id_categoria, id_usuario)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $descricao);
        $stmt->bindValue(3, $modo_preparo);
        $stmt->bindValue(4, $porcao);
        $stmt->bindValue(5, $id_categoria);
        $stmt->bindValue(6, $id_usuario);

        if ($stmt->execute()) {
            header("Location: listar_receita.php"); 
        } else {
            echo "Erro ao cadastrar receita, tente novamente.";
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
