<?php
    $srv = 'http://'.$_SERVER['SERVER_NAME'];
    $urlBase = $_SERVER['REQUEST_URI'];
    $acao = htmlspecialchars($_SERVER['PHP_SELF']);

    $urlAcao = $srv.$acao;

    // Verificar se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // Obter o palpite do jogador via formulário
        $palpite = $_POST['palpite'];

        // Verificar se o jogador passou a valor entre 0 até 10
        if(($palpite !== null) && ($palpite >= 0) && ($palpite <= 10)){
            $valSorteado = rand(0,10);

            // Comparar o palpite com o numero sorteado usando uma estrutura switch
            switch(TRUE){
                case $palpite < $valSorteado:
                    $resp = "Muito baixo!<br>TENTE DE NOVO!!!<br>Número da sorte era $valSorteado";
                    break;
                case $palpite > $valSorteado:
                    $resp = "Muito Alto!<br>TENTE DE NOVO!!!<br>Número da sorte era $valSorteado";
                    break;
                default:
                $resp = "Parabéns!<br>Jogue de novo!!!";
            }
        }else{
            $resp = "Por favor, insiria um número valido entre 0 e 10";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de adivinhação</title>
</head>
<body>
    <h1>Jogo de Adivinhação</h1>
    <p>Tente adivinhar um número entre 0 e 10!</p>
    <form method="post" action="<?=$urlAcao?>">
        <label>Seu palpite:</label>
        <input type="number" name="palpite" id="palpite">
        <input type="submit" value="Enviar Palpite">
    </form>
    <h2>
        <!--Iserir a resposta via BackEnd-->
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                echo $resp;
            }
        ?>
    </h2>
    <!-- 
    No exercicio do jogo inserir uma estrutura de repetição para tentativas de vezes que o usuario teve até acertar o valor sorteado.
    No final quando saida for parabens colocar você acertou em X tentativas, realizar um novo sorteio do valor sorteado.
    -->
</body>
</html>

