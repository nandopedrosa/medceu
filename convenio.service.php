<?php

/*  
    ------------------------------------------------------
                Funções de negócio de Convênios
    ------------------------------------------------------
     */

namespace Convenio;

function adicionar_convenio($sigla, $descricao)
{

    require_once "util.php";
    if (temAlgumInputVazio($sigla)) {
        header("location: adm-convenios.php?erro=camposvazios");
        exit();
    }

    require_once "convenio.dao.php";
    inserir_convenio($sigla, $descricao);
    header("location: adm-convenios.php?sucesso=adicionadocomsucesso");
    exit();
}

function excluir_convenio($idConvenio)
{
    require_once "convenio.dao.php";
    deletar_convenio($idConvenio);
}

function get_convenios()
{
    require_once "convenio.dao.php";
    $convenios = buscar_convenios();
    return $convenios;
}
