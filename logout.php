<?php
session_start();
$_SESSION['sessao_user'] = array();
session_destroy();
header('location:index.php?erro=4');
exit;
?>