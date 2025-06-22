<?php
class user_login{
    public function login ($email,  $senha){
        global $conexao;
        
        $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";
        $sql = $conexao ->prepare ($sql);
        $sql ->bindValue ("email", $email);
        $sql ->bindValue ("senha", $senha);
        $sql -> execute ();

        if ($sql ->rowcount() > 0) {
            $bd = $sql ->fetch();


            $_SESSION ['sessao_user'] = $bd ['id'];
            return true; 
        } else {
            return false;
        }


    }


}

?>