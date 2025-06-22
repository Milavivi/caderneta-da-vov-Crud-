<?php
require_once 'conexao.php'; 
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($nome) and !empty($email) and !empty($senha)) {
    try {
        $criar = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($criar);

        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $senha);

        



        if ($stmt->execute()) {
            if ($stmt = "SELECT * FROM usuarios WHERE email = :email";
            $stmt = $conexao ->prepare ($stmt);
            $stmt ->bindvalue ("email", $email);
            $stmt ->execute();
            ) {
        
            }
            header('location:login.php');

        
        } else {
            echo "erro ao criar a conta, tente novamente.";
        }

    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>









?>