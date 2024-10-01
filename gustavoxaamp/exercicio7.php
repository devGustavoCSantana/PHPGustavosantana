Problema: Verificador de Números primos
Desenvolva um programa que recebe um número inteiro 
positivo fornecido pelo usuario e verifica se esse 
número é primo ou não. Para isso, você pode criar uma 
função que recebe o numero como entrada e retorna
true se o número for primo se for divisel apenas 
por 1 e por elemesmo.
Para implementar essa vereficação, você pode usar uma 
estrutura de repetição para iterar sobre os possiveis 
divisores do número, que são os números inteiros de 2 
até a raiz quadrada do número.
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra os numeros primos</title>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     escolha a opração:<br>
     <input type="number" name= "numero" value="numeros"><br>
     <input type="submit" name="submit" value="Testar" />
     </form>

    <?php
    
     function ehPrimo($numero) {
        if ($numero < 2) {
            return false;
        }
        

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {

                return false;
            }
        }
        
        return true;
    }

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];
     


        if (ehPrimo($numero)) {
            echo "$numero é primo.";
        } else {
            echo "$numero não é primo.";
        }
     }
    
   
    
    

    ?>
</head>
<body>
    
</body>
</html>