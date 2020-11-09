<?php

    /*  
    ------------------------------------------------------
                Funções de negócio de Login
    ------------------------------------------------------
     */
       
     /* 
        Faz o login do usuário na aplicação
     */ 
    function login($email, $senha) {        
        
        require_once "util.php";
        if(temAlgumInputVazio($email, $senha)) {
            header("location: login.php?erro=camposvazios");
            exit();
        } 

        if(!isUsuarioAutentico($email, $senha)) {
            header("location: login.php?erro=authfail");
            exit();
        }

        //Logou com sucesso
        session_start();
        $_SESSION["userid"] = $email;
        header("location: dashboard.php");
    }

     /* 
        Checa se um usuário é autêntico (isto é, se login e senha conferem)
        A senha é hasheada com md5
     */
    function isUsuarioAutentico($email, $senha) {
        require_once "usuario.dao.php";
        $row = getUsuario($email);

        if(!$row) {
            header("location: login.php?erro=usuarionaoexiste");
            exit();
        } else {
            $senhaDbHash = $row['tx_senha'];
            if(md5($senha) == $senhaDbHash) {
                return true;
            } else {
                return false;
            }
        }
    }

    