<?php
    
     /*  
    ------------------------------------------------------
                Controlador de Convênios
    ------------------------------------------------------
     */ 
    if(isset($_POST["adicionarconvenio"])) {        
        $sigla = $_POST["sigla"];
        $descricao = $_POST["descricao"];

        require_once "convenio.service.php";        
        Convenio\adicionar_convenio($sigla, $descricao);
    } 

    #AJAX de deletar
    if(isset($_POST["deletar"])) {        
        $idConvenio = $_POST["deletar"];        
        
        require_once "convenio.service.php";
        Convenio\excluir_convenio($idConvenio);

        #Retorno ao AJAX call
        echo "sucesso";
        
        
    } 
    
    function get_convenios() {
        require_once "convenio.service.php";
        $convenios = Convenio\get_convenios();
        return $convenios;
    }