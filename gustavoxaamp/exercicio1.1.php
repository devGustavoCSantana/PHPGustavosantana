<?php 
    $srv = 'http://'.$_SERVER['SERVER_NAME'];
    $urlBase = $_SERVER['REQUESTS_URI'];
    $acao = htmlspecialchars($_SERVER['PHP_SELF']);
    $tentativas = 0;

    $urlAcao = $srv.$acao;

    // Verificar se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
       // Obter o palpite do jogador via formulário
       $palpite = $_POST['palpite'];

       // Verificar se o jogador passou a valor entre o 0 até 10 
       if(($palpite !== null) && ($palpite >= 0) &&($palpite <= 10 )){
            $valorSorteado = rand(0,10);

            // Comparar o palpite com o numero sorteado usando uma estrutura switch
            while($palpite != $valorSorteado){
              
                if ($palpite < $valorSorteado);        
                    $resp = "Muito baixo!<br> TENTE DE NOVO!!!<br>Número da sorte era $valsorteado";
                    $tentativas ++;
            }            
                if($palpite > $valorSorteado){
                    $resp = "Muito Alto!<br>TENTE DE NOVO!!!<br>Número da sorte era $valsorteado";
                    $tentativas ++;
                }
                elseif($palpite == $valorSorteado){
                $resp = "Parabéns!<br>Jogue de novo!!! tentativas:$tentativas";
                $tentativas ++;
            }
        }
    }else{
        $resp = "Por favor, insira um número valido entre 0 e 10";
    }
       
    


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo e adivinhação</title>
</head>
<body>
    <h1>Jogo de adivinhação</h1>
    <p>Tente adivinhar um número entre 0 e 10</p>
    <form method="post" action="<?=$urlAcao?>">
        <label>Seu palpite:</label>
        <input type="number" name="palpite" id="palpite" required>
        <input type="submit" value="Enviar palpite">
    </form>
    <h2>
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                echo $resp;
            }
        ?>
    </h2>
</body>
</html>

no exercicio do jogo inseriri uma estrutura de repetição para tentativas de vezes
que o usuario teve ate acertar o valor sorteado.
No final quando saida for parabens colocar voe acertou
em x tentativas, realizar um novo sorteio
do valor sorteado. 