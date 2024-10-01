<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $senha =  $_POST['senha'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      $numcartao = $_POST['numero_cartao'];
      $num = $_POST['nome_cartao'];
      $cod = $_POST['codigo_validacao'];
      $cpf = $_POST['cpf'];
      $vencimento = $_POST['vencimento'];
      $plan = $_POST['tipo_plano'];

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etapa 3</title>
</head>
<body>
<form action="etapa4.php" method="post" id="formulario">
        <label for="nome">nome do Perfil:</label>
        <input type="text" name="nomeperfil" id="nomeperfil"><br>
  
    <legend>Preferências de categorias:</legend>
    <input type="checkbox" id="categoria" name="categoria" value="comedia"> <label for="comedia">comedia</label><br>
    <input type="checkbox" id="categoria" name="categoria"value="Ação" > <label for="Ação">Ação</label><br>
    <input type="checkbox" id="categoria" name="categoria" value="Suspense"> <label for="suspense">suspense</label><br>
    <input type="checkbox" id="categoria" name="categoria" value="Terror"> <label for="romance">Romance</label><br>
    <input type="checkbox" id="categoria" name="categoria" value="Romance"> <label for="terror">Terror</label><br>
   
    <button type="submit">Proximo</button>


    <input type="hidden" name="nome" value="<?=$nome?>">
       
    <input type="hidden" name="email" value="<?=$email?>">

    <input type="hidden" name="senha" value="<?=$senha?>">

    <input type="hidden" name="numcartao" value="<?=$numcartao?>">

    <input type="hidden" name="num" value="<?=$num?>">

    <input type="hidden" name="cod" value="<?=$cod?>">

    <input type="hidden" name="cpf" value="<?=$cpf?>">

    <input type="hidden" name="vencimento" value="<?=$vencimento?>">

    <input type="hidden" name="plan" value="<?=$plan?>">


</form>
<script>document.getElementById('formulario').setAttribute('action', 'etapa4.php');</script>

    
</body>
</html>