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
function cadastrarAluno() {
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
        if ($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10 || $nota3 < 0 || $nota3 > 10 || $nota4 < 0 || $nota4 > 10) {
         $resultadoCadastro =  "Erro: As notas devem estar entre 0 e 10.";
         }
             $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
         if ($media >= 7 ) {
             $resultado = "Aprovado";
         } else if ($media >= 5) {
             $resultado = "Recuperação";
         } else {
             $resultado = "Reprovado";
        }
    
    return array(
        'nome' => $nome,
        'nota1' => $nota1,
        'nota2' => $nota2,
        'nota3' => $nota3,
        'nota4' => $nota4,
        'media' => $media,
        'resultado' => $resultado
    );
}



$resultadoCadastro = cadastrarAluno();
if (is_array($resultadoCadastro)) {
    echo "<h2>Aluno Cadastrado com Sucesso</h2>";
    echo "<p>Nome do Aluno: " . $resultadoCadastro['nome'] . "</p>";
    echo "<p>Nota do 1º Bimestre: " . $resultadoCadastro['nota1'] . "</p>";
    echo "<p>Nota do 2º Bimestre: " . $resultadoCadastro['nota2'] . "</p>";
    echo "<p>Nota do 3º Bimestre: " . $resultadoCadastro['nota3'] . "</p>";
    echo "<p>Nota do 4º Bimestre: " . $resultadoCadastro['nota4'] . "</p>";
    echo "<p>Média Anual: " . $resultadoCadastro['media'] . "</p>";
    echo "<p>Resultado: " . $resultadoCadastro['resultado'] . "</p>";
} else {
    echo $resultadoCadastro;
}
?>
</body>
</html>