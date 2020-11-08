<?php
/*  
    ------------------------------------------------------
                Funções de BD de Convenio
    ------------------------------------------------------
     */

namespace Convenio;

/*
    Insere um novo convenio no BD
*/

function inserir_convenio($sigla, $descricao)
{
    require_once "dbhandler.php";

    $sql = "insert into convenio(sg_convenio, ds_convenio) values (?,?)";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("location: login.php?erro=statementfailed");
        exit();
    }
    mysqli_stmt_bind_param($statement, "ss", $sigla, $descricao);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
}

/*
    Deleta um convenio no BD
*/
function deletar_convenio($idConvenio)
{
    require_once "dbhandler.php";

    $sql = "delete from convenio where id_convenio = ?";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("location: login.php?erro=statementfailed");
        exit();
    }
    mysqli_stmt_bind_param($statement, "i", $idConvenio);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
}

/*
    Retorna todos os convenios da base, ordenados alfabeticamente
*/
function buscar_convenios()
{
    require_once "dbhandler.php";

    $retorno = [];

    $sql = "select id_convenio as id, sg_convenio as Convênio, ds_convenio as Descrição from convenio order by sg_convenio";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("location: login.php?erro=statementfailed");
        exit();
    }
    mysqli_stmt_execute($statement);
    $resultado = mysqli_stmt_get_result($statement);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $retorno[] = $row;
        }
    } else {
        $retorno = false;
    }

    mysqli_stmt_close($statement);
    return $retorno;
}
