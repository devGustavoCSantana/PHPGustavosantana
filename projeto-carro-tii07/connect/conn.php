<?php
// Crie um arquivo dentro do servidor apache
// Nome do arquivo: connect.php

// Cria o TimeZone para nossa região
date_default_timezone_set('America/Sao_Paulo');

// Criando as variaveis de controle de configuração para o servidor de dados
$serverDB = "127.0.0.1:3306"; // ou "Localhost:3306" ou "Localhost" 
$userNameDB = "root";
$passwordDB = "";
$nameDB = "dbcarro";

// Criando a conexão MySQL - mysqli
$conn = @new mysqli(
    //Host
    $serverDB,
    //User
    $userNameDB,
    //Password
    $passwordDB,
    //Name Data Base
    $nameDB
);
if($conn->connect_error){
    $resp = "Erro: ".$conn->connect_errnor;
    $resp = $resp. "<br>";
    $resp = $resp. "Erro: ".$conn->connect_error;
}else{
    $resp = "Conectado com sucesso. <br>";
    $resp = $resp. "Host informado: ".$conn->host_info;
    $resp = $resp. "<br>";
    $resp = $resp. "Protocolado versão: ".$conn->protocol_version;
}

//echo $resp."<br>".$nameDB."<br>";
?>

