<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>



<div class = "container">
    <?php
if (isset($_GET['erro'])) {
    if ($_GET['erro'] == 1) {
        echo '<h3 style = "color:white">E-mail ou senha incorretos!</h3>';
    } elseif ($_GET['erro'] == 2) {
        echo '<h3 style = "color:white">Por favor, preencha todos os campos!</h3>';
    }
}

?>
    <h2>entre na sua conta:</h2>
    <form action="login.php" method="POST">

        <label>Email:</label>
        <input type="email" name="email" id= "email"   class= "input_user"><br>

        <label>Senha:</label>
        <input type="password" name="senha" id= "senha"   class= "input_user"><br>
        
        <input type="submit" value="entrar" class= "input_user_button">
        
    </form>
 </div>
</body>
</html>