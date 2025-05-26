<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela inicial</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body >
    <?php
    session_start();
    if(!isset($_SESSION['sessao_user'])){
        header ('location:index.php');
        exit;
    }
    ?>
    <h1 id="tela_inicial">tela de inicio temporaria</h1>
    <form action="logout.php"><button type ="submit">sair</button></form>
</body>
</html>