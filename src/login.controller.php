<?php
    
     /*  
    ------------------------------------------------------
                Controlador de Login
    ------------------------------------------------------
     */

    if(isset($_POST["login"])) {        
        $email = $_POST["email"];
        $senha = $_POST["senha"];        
        #Convertemos para lower case o email, para não haver problemas de comparação
        require_once "login.service.php";        
        login(strtolower($email), $senha);        
    } else {
        header("location: login.php");
    }