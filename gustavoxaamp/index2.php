<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de logica</title>
    <body>
     GUSTAVO CAVALCANTE 
<!-- TAG de código -->
    <?php
    // ECHO significa escrever texto
        echo "Olá mundo!!!<br>";
        /*
        * Comentario
        * em
        * bloco
        */
        echo "Gusatvo santana <br>";
        // Criando variáveis em PHP usar o $ =
        $nome = "gustavo santana";
        // Saida concatenando constante e variável
        echo "Bem-vindo $nome<br>";
       
        /*
            Cuidado ao utilizar variáveis não definidas
            echo "Bem-vindo $Nome<br>";
            echo "Bem-vindo $NOME<br>";
       
        */
       
        //Outra forma de concatenação
        echo "Bem-vindo " . $nome ." ao sistema.";
 
        /*
            Operadores Aritméticos
 
            * -> Multiplicação
            / -> Divisão
            + -> Adição
            - -> Subtração
            % -> Módulo (Resto da divisão)
            ** -> Exponencial
        */
        echo "<p>".(3%2)."</p>";
        echo "<p>".(3**2)."<p>";
 
        // Outra forma de impressão em tela
        print "<h1> EU sou PHP</h1>";
 
        //Podemos usar o PRINT ou ECHO porém como recomendação
        // ao usar um dos dois, use ele em todo seu projeto OK
        // Boas práticas!
 
        /* Tipos de Variáveis
 
        String - Conjunto de caracteres
        Integer - Números inteiros
        Float - Números flutuantes (fracionados)
        Boolena - Valor lógico
        Array - Vetor ou Matriz
        Object - Objeto (CLASSE)
       
        Podendo ser:
        Global | Local | Static (Constante)
        */
 
    ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
    </body>
</head>
<body>
    <!-- Abrindo PHP-->
    <p>
        Crie um programa que após receber os dados de um funcionário
        Nome, RG, CPF, Data de Nascimento, Tipo sanguineo e fator RH,
        Cargo, Departamento, Salário Bruto, Horário de entrada, horário de saída (levando em consideração
        que ele tem uma hora de almoço entre as 12h e ás 13h);
 
        Calcule:
            Tempo de permanência na empresa em relação ao tempo de sua entrada e saída
            descontando 1h de almoço;
            Armazena as Variáveis staticas com a tabela do INSS:
            Até R$ 1.412,00 - 7,5%
            Até R$ 2.666,68 - 9%
            Até R$ 4.000,03 - 12%
            Acima R$ 7.786,02 - 14%
    </p>
   
    <?php
     /*
       Variaveis de entrada
    
    */

    
    $funcionario      = $_POST['funcionario'];
    $rg                       =  $_POST['rg'];
    $cpf                     =  $_POST['cpf'];
    $dataNasc           =  $_POST['dataNasc'];
    $sangTipo            = $_POST['sangTipo'];
    $fatorRh               =  $_POST['cargo'];
    $cargo                 =  $_POST['cargo'];
    $depa                 =  $_POST['depart'];
    $salBruto            = (float) $_POST['salBruto'];
    $hrEntrada          = $_POST['hrEntrada'];
    $hrSaida             =  $_POST['hrSaida'];
   
    /*
    if($salBruto <= 1412){
        $inss = $salBruto * 0.075;
        echo $inss;
    }
    elseif($salBruto <= 2666.68){
        $inss = $salBruto * 0.09;
        echo $inss;
    }
    elseif($salBruto <= 4000.03){
        $inss = $salBruto * 0.12;
        echo " o valor é $inss <br>";
    }
    elseif($salBruto <= 7786.02){
        $inss = $salBruto * 0.14;
        echo $inss;
    }
    else{
        $inss = 1200;
        echo $inss;
    }
    */
    /* Variaveis para INSS*/
    $inss75 = 0.075;
    $inss9 = 0.09;
    $inss12 = 0.12;
    $inss14 = 0.14;

    // Valores de acordo com a tabela

    $valinss = 1412.00;
    $valinss = 2666.68;
    $valinss = 4000.03;
    

    $horaE = "07:54";
    $horaS = "18:15";

    $horaEc = substr($horaE, 0,2);
    $minEc = (substr($horaE, 3))/60;
    $horaSc = substr($horaS, 0,2);
    $minSc = (substr($horaS, 3))/60;

    $permHe = ($horaSc + $minSc);
    $permHs = ($horaEc + $minEc);
    
    $perm = ($permHe - $permHs) - 1.00;

    echo "$perm<br>";

    $minTc = (substr($perm, 2));
    $minTc = "0.$minTc";
    $minTc = $minTc*60;
    $horaTc = (substr($perm, 0,1));

    $horaP = $horaTc. ":". $minTc;

    echo $horaP;


    if($salBruto <= 1412.00){

        $inss = $salBruto*$inss75;

    }elseif($salBruto <= 2666.68){

        $inss = $salBruto*$inss9;

    }elseif($salBruto <= 4000.03){

        $inss = $salBruto*$inss12;
    }else{

        $inss = $salBruto*$inss14;
    }
    echo "o desconte é de $inss";


    ?>


    
</body>
</html>