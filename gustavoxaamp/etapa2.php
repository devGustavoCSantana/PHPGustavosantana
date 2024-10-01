<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $senha =  $_POST['senha1'];
      $confirmSenha =  $_POST['senha2'];
      $nome = $_POST['nome'];
      $email = $_POST['Email'];



      if($senha != $confirmSenha){
        echo "As senhas são diferentes";
    }
        }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>captura de dados</title>
</head>
<body>
<div class="form-container">
    <form id="planos" method="post" action="etapa3.php">
        <h2>Escolha seu Plano</h2>
        <label>Tipo de Plano</label>
        <select name="tipo_plano" id="tipo_plano" required>
            <option value="Premium">Premium R$/mês</option>
            <option value="Padrão 1080p">Padrão R$/mês</option>
            <option value="basico">basico R$/mês</option>
        </select>
        <button type="button" onclick="mostrarPagamento()">Escolher Plano</button>
    </form>
    <div id="pagamento" style="display:none;">
        <form id="pagamento_form" method="post" action="etapa3.php">
            <h2>Dados de Pagamento</h2>
            <input type="hidden" name="tipo_plano" id="plano_escolhido">
            <label>Nome no Cartão</label>
            <input type="text" name="nome_cartao" required>
            <label>Número do Cartão</label>
            <input type="text" name="numero_cartao" required>
            <label>Código de Validação</label>
            <input type="text" name="codigo_validacao" required>
            <label>Vencimento</label>
            <input type="text" name="vencimento" placeholder="MM/AA" required>
            <label>CPF</label>
            <input type="text" name="cpf" required>


            <input type="hidden" name="nome" value="<?=$nome?>">
            
            <input type="hidden" name="email" value="<?=$email?>">

            <input type="hidden" name="senha" value="<?=$senha?>">


            
            <button type="submit">Próxima Etapa</button>
        </form>
    </div>
</div>
<script>
    function mostrarPagamento() {
        var plano = document.getElementById("tipo_plano").value;
        document.getElementById("plano_escolhido").value = plano;
        document.getElementById("pagamento").style.display = "block";
        document.getElementById('formulario').setAttribute('action', 'etapa3.php');
    }
</script>
       
        <input type="hidden" name="nome" value="<?=$nome?>">

       
        <input type="hidden" name="email" value="<?=$email?>">
        

        <input type="hidden" name="senha" value="<?=$senha?>">

    </form>
    
    
</body>
</html>