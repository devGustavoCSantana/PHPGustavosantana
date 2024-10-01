<?php
echo "<h1>Funções para Strings em PHP</h1>";
$texto = "Viva hoje";

echo "strlen() Retorna o comprimento de uma string<br>";
echo strlen($texto);
echo "<hr>";

echo "str_word_count() conta o numero de palavras<br>";
echo str_word_count($texto);
echo "<hr>";

echo "strpos() retorna a posição da primeira ocorrência de um palavra<br>";
echo strpos($texto, "hoje");
echo "<hr>";

echo "str_replace() Substitui um caracter em um texto.<br>";
echo str_replace("hoje", "vida", $texto);
echo "<hr>";

echo "strtoupper() converte um texto para maiúsculo<br>";
echo strtoupper($texto);
echo "<hr>";

echo "strtolower() converte um texto em minúsculo<br>";
echo strtolower($texto);
echo "<hr>";

echo "substr() retorna parte de um texto<br>";
echo substr($texto, 4, 5);
echo "<hr>";

echo "trim() remove espaços do inicio e do fim de um texto<br>";
//echo $texto.'<br>';
echo trim($texto);
echo "<hr>";

echo "explode() divide uma string em um array";
$array = explode(" ", $texto);
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr>";

echo "implode() junta elementos de um array<br>";
echo implode(" ", $array);
echo "<hr>";

echo "str_split() divide uma string em partes, 1º parametro é a string e 2º parametro quantos caractres devem ter cada parte<br>";
$var = str_split($texto, 2);
echo "<pre>";
print_r($var);
echo "</pre>";
echo "<hr>";

echo "str_pad(string, tamanho, caractere, tipo)<br>";
echo "String: o texto de entrada<br>";
echo "Tamanho: o comprimento do texto de saída<br>";
echo "Caractere: o caracter a ser adicionado<br>";
echo "Tipo: STR_PAD_RICHT, STR_PAD_LEFT ou STR_PAD_BOTH<br>";
echo str_pad($texto, 19, "-", STR_PAD_BOTH);