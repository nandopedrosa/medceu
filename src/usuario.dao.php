<?php

    /*  
    ------------------------------------------------------
                Funções de BD de Usuario
    ------------------------------------------------------
     */


/*
    Retorna um usuário como uma Row ou falso se não foi encontrado
    Chave: email
*/
function getUsuario($email) {
    require_once "dbhandler.php";    
    $retorno = null;

    $sql = "select * from usuario where tx_email = ?;";  
    $statement = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement, $sql)) {
        exit("Não foi possível conectar ao banco de dados. Erro: " . mysqli_stmt_error($statement));
    }  
    mysqli_stmt_bind_param($statement, "s", $email);  
    mysqli_stmt_execute($statement);
    $resultado = mysqli_stmt_get_result($statement);

    if($row = mysqli_fetch_assoc($resultado)) {
        $retorno = $row; #retorna campos do usuário
    } else {
        $retorno = false; #nenhum usuário encontrado
    }

    mysqli_stmt_close($statement);    
    return $retorno;
}