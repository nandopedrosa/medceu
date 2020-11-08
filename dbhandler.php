<?php
    
    #Lida com a conexão ao banco de dados

    $serverName = "localhost";
    $userName = "root";
    $password = "root";
    $database = "medceu";

    $conn = mysqli_connect($serverName, $userName, $password, $database);

    if(!$conn) {
        die("Erro de conexão ao banco de dados: " . mysqli_connect_error());
    }

    



