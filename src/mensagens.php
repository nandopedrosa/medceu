<?php
//Mensagens de sucesso
if (isset($_GET["sucesso"])) {

    $html = '
        <div class="row">
            <div class="mx-auto alert alert-success alert-dismissible fade show" role="alert">   
                #MSG-DE-SUCESSO#<br>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>          
        ';

    $sucesso = $_GET["sucesso"];

    switch ($sucesso) {
        case "adicionadocomsucesso":
            $html = str_replace("#MSG-DE-SUCESSO#", "Registro adicionado com sucesso.", $html);
            break;
        case "acaorealizadacomsucesso":
            $html = str_replace("#MSG-DE-SUCESSO#", "Ação realizada com sucesso.", $html);
            break;
        case "msgenviadacomsucesso":
            $html = str_replace("#MSG-DE-SUCESSO#", "Mensagem enviada com sucesso. Aguarde o nosso retorno.", $html);
            break;
        default:
            $html = str_replace("#MSG-DE-SUCESSO#", "Mensagem desconhecida.", $html);
    }

    echo $html;
}

//Mensagens de erro
if (isset($_GET["erro"])) {

    $html = '
        <div class="row">
            <div class="mx-auto alert alert-danger alert-dismissible fade show" role="alert">   
                #MSG-DE-ERRO#<br>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>          
        ';

    $erro = $_GET["erro"];

    switch ($erro) {
        case "camposvazios":
            $html = str_replace("#MSG-DE-ERRO#", "Por favor, preencha todos os campos obrigatórios.", $html);
            break;
        case "falhamsg":
            $html = str_replace("#MSG-DE-ERRO#", "Ocorreu um problema no envio de mensagem.", $html);
            break;
        case "authfail":
            $html = str_replace("#MSG-DE-ERRO#", "Usuário ou Senha incorretos.", $html);
            break;
        case "loginrequired":
            $html = str_replace("#MSG-DE-ERRO#", "É necessário fazer o login.", $html);
            break;
        case "usuarionaoexiste":
            $html = str_replace("#MSG-DE-ERRO#", "Este usuário não existe.", $html);
            break;
        default:
            $html = str_replace("#MSG-DE-ERRO#", "Erro desconhecido. Favor entrar em contato com o administrador do sistema.", $html);
    }

    echo $html;
}
