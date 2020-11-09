<?php
    
    #Lida com a conexão ao banco de dados   
    $serverName = "";
    $userName = "";
    $password = "";
    $database = "";
    $port = null;
       
    /*
    Checamos se a variável de ambiente do Heroku está presente. 
    Se sim, então configuramos a base de dados para o ClearDB (heroku)
    Se não, então configuramos para o ambiente local 
    */
    $db_config_var = getenv('CLEARDB_DATABASE_URL');

    if($db_config_var) {
        #Heroku
        $url = $url=parse_url($db_config_var);
        $serverName = $url["host"];
        $userName = $url["user"];
        $password = $url["pass"];
        $database = substr($url["path"],1);
    } else {
        #Ambiente local
        $serverName = "localhost";
        $userName = "root";
        $password = getenv('SECRET_KEY');
        $database = "medceu";
        $port = "3306";
    }

    $conn = mysqli_connect($serverName, $userName, $password, $database, $port);

    if(!$conn) {
        die("Erro de conexão ao banco de dados: " . mysqli_connect_error());
    }

    



