<?php
require_once 'conexao.php';
require_once 'protecao.php';

$nome_categoria = $_POST['nome_categoria'];

if (!empty($nome_categoria)) {
    try {
        $sql = "INSERT INTO categorias (nome_categoria) VALUES (?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, $nome_categoria);

        if ($stmt->execute()) {
            header ("location:listar_categoria.php");
            
        
        } else {
            echo "Erro ao cadastrar categoria.";
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
} else {
    echo "Por favor, preencha o nome da categoria.";
}
?>
