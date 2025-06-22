<?php 
require_once 'conexao.php';
require_once 'protecao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Criar Categoria</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="corpo">

  <div class="container">

    <h2>Criar Categoria</h2>
    <form action="receber_categoria.php" method="POST">

      <label>Nome da Categoria:</label>
      <input type="text" name="nome_categoria" class="input_user" required><br>
      <input type="submit" value="Cadastrar Categoria" class="input_user_button">
      
    </form>

  </div>

</body>
</html>
