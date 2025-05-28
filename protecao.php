 <?php
    session_start();
    if(!isset($_SESSION['sessao_user'])){
        header ('location:index.php?erro=3');
        exit;
    }
    ?>
