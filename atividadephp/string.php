<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<h1>Funções para Strings em PHP</h1>
    <main>
        <div class="container">
            <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                <div class="grupo">
                    <label for="texto">Digite um texto:</label>
                    <input type="texto" name="texto" id="texto">
                </div>
                <div class="grupo">
                    <button type="submit" id="adiciona">Verificar</button>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                  $texto = $_POST['texto'];
                  if(strlen($texto ) <= 4 || strlen($texto) >= 150 ) {
                    echo "O texto deve conter entre 4 e 150 caracteres. <br>";
                    echo"Digite novamente! <br>";

                  }else {
                    echo strrev($texto) . "<br>";
                    $textocontador = str_word_count($texto);
                    $textoconletras = strlen($texto);
                    echo "Texto contém " .$textocontador ." palvras e " .$textoconletras ." carcteres <br>";
                     echo md5($texto) . "<br>";
                     echo str_pad($texto, 35, "*", STR_PAD_BOTH) . "<br>";
                     echo str_shuffle($texto) . "<br>";

                     echo str_replace("@", "@", $texto);

                     $arrey = str_split($texto, 10);
                     echo"<pre>";
                     print_r($arrey);
                     echo"</pre>";
                     echo"<br>";

                     $arrey = explode(" ", $texto);
                     echo "<pre>";
                     print_r($arrey);
                     echo "</pre";
                     echo "<br>";

                     echo implode("-", $arrey);
                     echo "<br>";

                     echo strtoupper($texto) . "<br>";
                  }
                }

            ?>
        </div>
    </main>
</body>
</html>