<?php
session_start();

 if (!empty($_POST['email']) and !empty($_POST['senha'])){
    require_once 'conexao.php';
    require_once 'usuario_class.php';
    $user= new user_login();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($user->login($email, $senha)== true) {
      if (isset ($_SESSION['sessao_user'])) {
         header ('location: inicio.php');
         exit;
      } else {
         header('location:index.php');
         exit;
      }
     
    } else{
      header ('location:index.php?erro=1');
      exit; 
    }


 } else{
    $email = null;
    $senha = null;
    header ("location:index.php?erro=2");
    exit;
 }


?>