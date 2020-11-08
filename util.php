<?php

    #Funções úteis que podem ser incluídas em outros arquivos

    #Variáveis Globais para Ações de CRUD
    $acaoDeletar = '<button data-controller="#CONTROLADOR#" data-tipo-acao="deletar" data-id-registro="#ID_REGISTRO#" title="Excluir" type="button" class="btn btn-sm btn-danger acao-tabela"> <i class="icofont-trash"></i></button>';   
    $acaoEditar = '<a href="#CONTROLADOR#?editarRegistroId=#ID_REGISTRO#" data-controller="#CONTROLADOR#" data-id-registro="#ID_REGISTRO#" class="btn btn-sm btn-primary acao-tabela" role="button" title="Editar"><i class="icofont-pencil-alt-1"></i></a>';

    # Checa se algum parâmetro pasado para a função é null ou vazio
    function temAlgumInputVazio(...$inputs) {        
        foreach($inputs as $input) {
            if(empty($input)) {
                return true;
            }
        }
        return false;
    }

    /* Monta uma tabela baseada em campos de um array
        arrayDeEntrada: um array contendo as linhas e colunas (keys) que você quer mostrar na tabela       
        arrayDeAcoes: um array contendo as ações (update, delete, view, etc.) que você deseja na última coluna     
        controlador: qual controlador será responsável por lidar com as ações   
        esconderId: true, caso você queira esconder a primeira coluna (id)
        idAlias: o identificador do campo de Id (nome da coluna)
    */
    function html_table($arrayDeEntrada, $arrayDeAcoes = array(), $controlador = "", $esconderId = true, $idAlias = 'id') {
        if ($arrayDeEntrada && count($arrayDeEntrada) > 0) {
            $retorno = '
            <table class="table table-striped esconder-id">
                <thead>
                <tr> 
                    #HEADER# 
                </tr>
                </thead>
                <tbody>
                    #BODY#
                </tbody>
            </table>    
            ';

            #Habilita a classe que permitirá esconder o Id por javascript (ver script da página)
            if(!$esconderId) {
                $retorno = str_replace("esconder-id", "", $retorno);
            }
            
            #Monta o cabeçalho da tabela (pode ou não ter ações)
            $header = implode('</th><th>', array_keys(current($arrayDeEntrada)));
            $header = '<th>' . $header;
            if(count($arrayDeAcoes) > 0) {
                $header = $header . '<th>Ações' . '</th>';
            }
            $retorno = str_replace("#HEADER#", $header, $retorno);

            #Monta o corpo da tabela
            $body = "";
            $cell_template = "<tr>
                                #CELL#
                              </tr>";
            foreach($arrayDeEntrada as $row) {
                #Células de dados
                array_map('htmlentities', $row);
                $cell = implode('</td><td>', $row);
                $cell = '<td>' . $cell . '</td>';

                #Célula específica de ações
                if(count($arrayDeAcoes) > 0) {
                    $acoes = implode(' ', $arrayDeAcoes);
                    $acoes = str_replace("#CONTROLADOR#", $controlador, $acoes);
                    $acoes = str_replace("#ID_REGISTRO#", $row[$idAlias] , $acoes);
                    $cell = $cell . '<td>' . $acoes  .  '</td>';
                }
                $body = $body . str_replace("#CELL#", $cell, $cell_template);
            }
            $retorno = str_replace("#BODY#", $body, $retorno);
            return $retorno;
        } else {
            return "";
        }
    }


