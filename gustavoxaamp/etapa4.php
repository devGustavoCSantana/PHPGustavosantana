<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){


        $senha =  $_POST['senha'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
  
        $numcartao = $_POST['numcartao'];
        $num = $_POST['num'];
        $cod = $_POST['cod'];
        $cpf = $_POST['cpf'];
        $vencimento = $_POST['vencimento'];
        $plan = $_POST['plan'];
        $perfil = $_POST['nomeperfil'];
}  
$matriz = array(
    array($senha, $nome, $email),
    array($numcartao, $num, $cod),
    array($cpf, $vencimento, $plan),
    array($perfil)
 
);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etapa 4</title>
</head>
<body>
<h2>Dados Iniciais</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Confirmar Senha</th>
        </tr>
        <tr>
        </tr>
    </table>
 
    <h2>Validação de Dados</h2>
    <table border="1">
        <tr>
            <th>Nome do Cartão</th>
            <th>Número do Cartão</th>
            <th>Código de Validação</th>
            <th>Vencimento do Cartão</th>
            <th>CPF</th>
            <th>Plano</th>
        </tr>
        <tr>
          
        </tr>
    </table>
 
    <h2>Perfil</h2>
    <table border="1">
        <tr>
            <th>Nome perfil</th>
            <th>Ação</th>
            <th>Comédiaa</th>
            <th>Terror</th>
            <th>suspense</th>
            <th>drama</th>
        </tr>
        <tr>
      
        </tr>
    </table>
    
</body>
</html>