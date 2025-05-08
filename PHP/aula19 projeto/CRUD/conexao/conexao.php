<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "faculdade";

//Criando Conexão
$conn = new mysqli($serverName, $userName, $password, $dbName);

//Validação de conexão
if ($conn->connect_error){
    echo "Conexão Falhou";
}else {
    echo "Conexão feita com sucesso!";
}



?>