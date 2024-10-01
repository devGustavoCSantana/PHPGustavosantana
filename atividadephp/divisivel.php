<?php
$n = 0;

echo "<h1>Números divisíveis por 5</h1>";

while($n <= 50) {
    if(($n % 5) == 0) {
        echo "$n é divisível por 5<br>";
    }
    $n++;
}