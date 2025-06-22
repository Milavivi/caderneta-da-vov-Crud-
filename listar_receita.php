<?php
require_once 'conexao.php';
require_once 'protecao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Receitas</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="corpo">

<?php
$id_usuario = $_SESSION['sessao_user'];

try {
    $sql = "SELECT * FROM receitas";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $receitas = $stmt->fetchAll();

    if ($receitas) {

        echo "<div class='rec_amost'>"; 

        foreach ($receitas as $receita) {

             echo "<div class='card_receita'>";

                echo "<h4>" . $receita['titulo'] . "</h4>";

                echo "<p><strong>Descrição:</strong><br>" . nl2br($receita['descricao']) . "</p>";

                echo "<p><strong>Modo de Preparo:</strong><br>" . nl2br($receita['modo_preparo']) . "</p>";

                echo "<p><strong>Porção:</strong> " . $receita['porcao'] . "</p>";


                echo "<div class='botoes_receita'>";

                    echo "<a href='editar_receita.php?id={$receita['id']}'><button class='botao_editar'>Editar</button></a> ";
                    echo "<a href='deletar_receita.php?id={$receita['id']}' onclick=\"return confirm('Tem certeza que deseja deletar?');\"><button class='botao_deletar'>Deletar </button></a>";

                echo "</div>";
            
             echo "</div>";

        }
         echo "</div>";

    } else {
        echo " <p class= 'erro'> Nenhuma receita encontrada. </p>";
    }

} catch (PDOException $erro) {
    echo "Erro ao buscar receitas: " . $erro->getMessage();
}
?>
    
</body>
</html>