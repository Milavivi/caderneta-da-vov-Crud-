<?php
require_once 'conexao.php';
require_once 'protecao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Categorias</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="corpo">

<?php
$id_usuario = $_SESSION['sessao_user'];

try {
    $sql = "SELECT * FROM categorias";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $categorias = $stmt->fetchAll();

    if ($categorias) {

        echo "<div class='rec_amost'>"; 

        foreach ($categorias as $categoria) {

            echo "<div class='card_receita'>";

            echo "<h4>" . $categoria['nome_categoria'] . "</h4>";

            echo "<div class='botoes_receita'>";
                echo "<a href='editar_categoria.php?id={$categoria['id']}'><button class='botao_editar'>Editar</button></a> ";

                echo "<a href='deletar_categoria.php?id={$categoria['id']}' onclick=\"return confirm('Tem certeza que deseja deletar?');\"><button class='botao_deletar'>Deletar</button></a>";
                
            echo "</div>";

            echo "</div>";
        }

        echo "</div>";
        
     echo "<div class='botao_cadastrar'>";
        echo "<a href='cadastrar_categoria.php'>
            <button id='btn_cadastrar_receita'>Cadastrar Categoria</button>
        </a>";
     echo "</div>";


    } else {
        echo "<p class='erro'>Nenhuma categoria encontrada.</p>";
    }

} catch (PDOException $erro) {
    echo "Erro ao buscar categorias: " . $erro->getMessage();
}
?>

</body>
</html>
