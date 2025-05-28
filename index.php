<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>



<div class = "container">
    <?php
        if (isset($_GET['erro'])) {
            if ($_GET['erro'] == 1) {
                echo '<h3 class="erro">E-mail ou senha incorretos!</h3>';
            } elseif ($_GET['erro'] == 2) {
                echo '<h3 class="erro">Por favor, preencha todos os campos!</h3>';
            } elseif ($_GET['erro'] == 3) {
                echo '<h3 class="erro">Acesso negado, login necessario!</h3>';
            }elseif ($_GET['erro'] == 4) {
                echo '<h3 class="erro">logout realizado com sucesso!</h3>';
            }
        }
    ?>
    <h2>Entre na sua conta:</h2>
    <form action="login.php" method="POST">

        <label>Email:</label>
        <input type="email" name="email" id= "email"   class= "input_user" required><br>

        <label>Senha:</label>
        <input type="password" name="senha" id= "senha"   class= "input_user" required><br>
        
        <input type="submit" value="entrar" class= "input_user_button">
        <a href="http://localhost/caderneta_vovo/cadastrar_usuario.php" class= "link_sign"> <h6>Não tem conta? Registre-se</h6></a>
        
    </form>
 </div>
</body>
</html>