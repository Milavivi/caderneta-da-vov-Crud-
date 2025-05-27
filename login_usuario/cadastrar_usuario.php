<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing up</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class = "container">

         <h2>Crie sua conta:</h2>
    <form action="receber_cadastro.php" method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" id= "nome" required  class= "input_user"><br>

        <label>Email:</label>
        <input type="email" name="email" id= "email" required  class= "input_user"><br>

        <label>Senha:</label>
        <input type="password" name="senha" id= "senha" required  class= "input_user"><br>
        
        <input type="submit" value="Criar conta" class= "input_user_button">

       
        
    </form>
    </div>
    
</body>
</html>