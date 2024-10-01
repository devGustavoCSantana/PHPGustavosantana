<?php



$nome       = $_POST['nome'];
$materia    = $_POST['materia'];
$nota1      = $_POST['nota1'];
$nota2      = $_POST['nota2'];
$nota3      = $_POST['nota3'];
$nota4      = $_POST['nota4'];


$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

if($media >= 7 ){

    $resultado = 'aprovado';

}elseif($media >= 5 ){

    $resultado = 'Recuperação';

}else{

    $resultado = 'Reprovado';
}


echo "<p>Nome: $nome</p>";
echo "<p>Materia : $materia</p>";
echo "<p>Media: $media</p>";
echo "<p>Resultado: $resultado</p>";


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 02 de logica</title>
</head>
<body>
    <p>
        Crie um programa que após receber o nome, materia e as notas bimestrais via formaulario de html 
        calcule a média e informe o resultado aprovado média >=7, Recuperação média >=5 ou Reprovado 
        média < 5.
        No final imprima o nome, matéria, média e seu resultado.
    </p>
    
</body>
</html>