<?php
$texto = "a mae te ama";//form
//strrev() inverte a direção de texto;
$sem_espaco = str_replace(" ", "", $texto);

if($sem_espaco == strrev($sem_espaco)) {
    echo "É um palindromo<br>";
} else {
    echo "Não é um palindromo<br>";
}
echo "$sem_espaco = ".strrev($sem_espaco);