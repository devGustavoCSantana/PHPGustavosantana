<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Primos</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label>Digite um número:</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>
 
    <?php
        function numPrimo ($num) {
            for ($i = 2; $i < $num/2; $i++) {
                if ($num % $i == 0) {
                    return False;
                    //$resp = False;
                }
                /*else {
                    $resp = True;
                }*/
            }
            return True;
            //return $resp;
        }
 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $num = (Integer)$_POST['num'];
           
            $resp = numPrimo($num);
 
            if (numPrimo($num) == True) {
                $resp = "O número informado é primo.";
            } else {
                $resp = "O número informado não é primo.";
            }
            echo $resp;
        }
    ?>
</body>
</html>