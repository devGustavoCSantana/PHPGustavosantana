<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    echo "Seu nome é $nome <br>";
    echo "Seu email é $email <br>";
    echo "Sua senha é $senha <br>";
}