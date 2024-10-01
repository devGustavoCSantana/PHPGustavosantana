<?php

// Jogue o Dado
// RAND --> Randomico de 1 até 6
$dado = rand(1,6);
echo $dado . " ";
switch($dado){
    case 1:
        echo "Avance 1 casa";
        break;//Sair da lista
    case 2:
    case 3:
    case 4:
        echo "Jogue novamente";
        break;
    case 5:
        echo "Você perdeu a vez";
        break;
    case 6:
        echo "bonus você pode avançar 3 casas";
        break;
    default:
        echo "Jogue novamente!!!";
        break;
}


?>

Crie um jogo que após gerar valores aleatórios entre 0 e 10. Quando enviado pelo o usuario via formulário verifica se o palpite está dentro do intervalo permitido e depois usamos o caso para verificar se o palpite dele esta correto, no final imprima uma mensagem ao jogador o parabenizando pelo acerto. e deixando ele poder jogar novamente.

Operador Relacionais
== 	    Igual a
!= 	    Diferente de
=== 	Idêntico a (valores iguais e do mesmo tipo)
!== 	Não idêntico a
> 	    Maior do que
>= 	    Maior ou igual a
< 	    Menor do que
<= 	    Menor ou igual a