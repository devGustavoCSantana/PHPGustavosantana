<?php
echo "<h1>Soma dos pares de 0 a 50</h1>";

$soma = 0;
$i = 0;
while($i <= 50) {
    if(($i % 2) == 0) {
        $soma = $soma + $i;
        if($i > 0) {
            echo " + ";
        }
        echo " $i ";
    }
    $i++;
}
echo "<div>A soma total dos pares de 0 a 50 é $soma</div>";