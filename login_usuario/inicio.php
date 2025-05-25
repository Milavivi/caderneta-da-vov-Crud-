<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela inicial</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['sessao_user'])){
        header ('location:index.php');
        exit;
    }
    ?>
    <h1>deu certo? true or false</h1>
    <form action="logout.php"><button type ="submit">sair</button></form>
</body>
</html>