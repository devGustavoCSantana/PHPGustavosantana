<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>Trabalhando com Matrizes</h1>
    <?php
        // Trabalhando com Matrizes
        $matriz = array(
            ["0,1","0,2","0,3","0,4"],
            ["1,1","1,2","1,3","1,4"]
    );
 
        echo $matriz[0][1];
        echo "<hr>";
        // Matriz Tridimencional
        //Matriz = $agenda --> linhha = 'Guilherme' --> Coluna =
        $agenda = [
                'Gustavo' => [
                        'Telefone' => ["(11)90000-0000", "(11)91111-1111"],
                        'Email'    => ["gustavo.cfsantana@senacsp.edu.br", "gustavo.cfsantana@senacsp.edu.br"],
                        'Data-nascimento'   =>['23/05/2003']
                ],
                'Fulano'    => [
                        'Telefone' => ["(11)92222-2222", "(11)3333-3333"],
                        'Email'    => ["Fulano.dasilva2@senacsp.edu.br", "Fulanodasilva@outlook.com"],
                        'Data-nascimento'   =>['01/01/2000']
                ],
                'Ciclano'    => [
                        'Telefone' => ["(11)4444-4444", "(11)95555-5555"],
                        'Email'    => ["Ciclano.dasilva3@senacsp.edu.br", "Ciclanodasilva@outlook.com"],
                        'Data-nascimento'   =>['22/02/2002']
                ]
        ];        //   Linha    |    Coluna       | Profundidade
        echo $agenda['Gustavo']['Data-nascimento'][0];
        echo"<hr>";
 



        // Agenda Bidimencional
        $agenda2 = [
            'Gustavo' => [ // linha-0    Profundidade - 0 |  Profundidade - 1
                    'Telefone'          => "(11)90000-0000" , "(11)91111-1111",     // Coluna-0
                    'Email'             => "gustavo.cfsantana@senacsp.edu.br",   // Coluna-1
                    'Data-nascimento'   => '10/09/2006'                             // Coluna-2
            ],                          // Profundidade - 0 |  Profundidade - 1
        ];
                //       Linha   |  Coluna
        echo $agenda2['Gustavo']['Email'];
        echo "<hr>";
 
        // Outra Forma de criar
        $matriz2 = array(
            array("a0","b1","c2"), // linha-0
            array("d0","e1","f2")  // linha-1
        );    // C-0 | C-1 | C-2
       
                //    L | C        
        echo $matriz2[1] [2];
        echo "<hr>";
 




        
        // Matriz Tridimencional
        $matriz3 = [
            [
                ["0",1],//Coluna-0
                [2],//Coluna-1
                [3,4],//Coluna-2
            ]// Linha-0
        ];
 
        echo $matriz3[0][2][1]; // = L0|C2|P1
       
        //        |C0(P0,P1)| , |C1,P0| , |C2(P!,P1)|
        //[LINHA-0     [0,1]   ,  [2]  ,    [3,4]]        
    ?>
</body>
</html>
tem menu de contexto
Redigir