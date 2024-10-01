<?php
$n = 6;//$_POST['n'];
echo "<h1>Fatorial $n</h1>";
$resposta = 1;

echo "{$n}! = ";

while($n > 0) {
    $resposta = $resposta * $n;//$resposta *= $n;
    echo $n;
    if($n > 1) {
        echo " * ";
    }    
    $n--;
}
echo " = $resposta";