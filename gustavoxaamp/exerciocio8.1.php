<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notas</title>
</head>
<body>
    <p>
        Crie um programa que dever ser inserido em um vetor as notas bimestrais de um aluno e uma função para realizar este cadastro via formulario do php, neste caso necessito do arquivo HMTL e PHP;
        Realize a média e a situação entre aprovado, recuperação e reprovado.
        Valide a entradas das notas via JavaScript, para o backend receber apenas as notas validas de 0 à 10.
        mesmo assim valide as entradas também em PHP.
    </p>

   
    
    <?php

function validarNota($nota) {
    return is_numeric($nota) && $nota >= 0 && $nota <= 10;
}
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $notas = $_POST;
 

    foreach ($notas as $nota) {
        if (!validarNota($nota)) {
            die("Erro: As notas devem ser números válidos entre 0 e 10.");
        }
    }

    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }
 

    echo "Média: " . number_format($media, 2) . "<br>";
    echo "Situação: " . $situacao;
}
?>

</body>
</html>