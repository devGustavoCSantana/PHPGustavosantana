<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vetor e Matriz</title>
</head>
<body>
    <?php
 
        // Criando vetor unilateral
        $vetor1 = array(
            "Thais",
            "23/04/2007",
            17,
            "123456789",
            true
        );
        echo $vetor1[2] ."<hr>";
 
        $vetor2 = [
            "TII-07",
            "Lab-31",
            "manhã",
            true
        ];
        echo $vetor2[3] ."<hr>";
 
        // Vetor com parametro
        $vetor3 = array(
            "nome" => "Thais",
            "data de nascimento" => "23/04/2007",
            "idade" => 17,
            "numero de cel" => "123456789",
            "atividade" => true
        );
        echo $vetor3["numero de cel"] ."<hr>";
 
        foreach ($vetor3 as $chave => $valor){
            echo "{$chave}: {$valor}". "<br>";
        }
        echo "<hr>";
 
        // Imprime todos os dados do vetor
        // Tipo de informação e quantidade de carcter usado
        var_dump($vetor3);
        echo "<hr>";
 
        // Imprime todo o vetor de uma vez só
        print_r($vetor3);
 
       // Remove o primeiro item do valor
        array_shift($vetor2);
        print_r($vetor2);
        echo "<hr>";
       
        // Remove o último item do vetor
        array_pop($vetor1);
        print_r($vetor1);
        echo "<hr>";
 
        // Organizar de ordem crescente o vetor
        $vetor4 = ["Fusca","Brasilia", "Palio", "HB20"];
        sort($vetor4);
        print_r($vetor4);
        echo "<hr>";
 
        // Organiza em ordem decrescente o vetor
        rsort($vetor4);
        print_r($vetor4);
        echo "<hr>";
 
        // Organiza em ordem crescente o vetor com parametro de acordo com o valor
        asort($vetor3);
        print_r($vetor3);
        echo "<hr>";
     
        // Organiza em ordem decrescente o vetor com parametro de acordo com o valor
        arsort($vetor3);
        print_r($vetor3);
        echo "<hr>";
 
        // Organiza em ordem crescente o vetor com parametro de acordo com a chave
        ksort($vetor3);
        print_r($vetor3);
        echo "<hr>";
 
        // Organiza em ordem decrescente o vetor com parametro de acordo com a chave
        krsort($vetor3);
        print_r($vetor3);
        echo "<hr>";
 
        // Remover elementos repetidos dentro do valor
        $vetor5 = [3,4,6,8,4,9,7,3];
        $vetor5 = array_unique($vetor5);
        print_r($vetor5);
        echo "<hr>";
 
        // Impressão de vetor usando Foreach
        foreach ($vetor4 as $carros){
            echo "$carros <br>";
        }
        echo count($vetor4);
        echo "<hr>";
 
        // Outra maneira de Impressão de vetor usando For
        for($i=0;$i<count($vetor4); $i++){
            echo "$vetor4[$i] <br>";
        }
        echo"<hr>";
    ?>
</body>
</html>
tem menu de contexto
Redigir