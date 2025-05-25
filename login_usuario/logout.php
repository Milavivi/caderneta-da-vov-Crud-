<?php
session_start();
$_SESSION['sessao_user'] = array();
session_destroy();
header('location:login.php');
exit;
?>