<?php
    
    #Lida com a conexão ao banco de dados

    $serverName = "localhost";
    $userName = "root";
    $password = "minhapomba";
    $database = "medceu";
    $port = "8889";

    $conn = mysqli_connect($serverName, $userName, $password, $database, $port);

    if(!$conn) {
        die("Erro de conexão ao banco de dados: " . mysqli_connect_error());
    }

    



