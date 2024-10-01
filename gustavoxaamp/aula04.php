<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição</title>
</head>
<body>
    <h2>PARA</h2>
    <?php 
    for($i=0;$i<11;$i++){
        echo $i."<br>";
    }
    echo "após o loop o valor de i é $i.";
    ?>
    <hr>
    <h2>ENQUANTO</h2>
    <?php 
        $m =0;
        while($m < 11){
            echo $m."<br>";
            $m++;
        }
        echo "após o loop o valor de i é $m.";
    ?>
    <hr>
    <h2>REPITA</h2>
    <?php 
    $z = 0;
    do{
        echo $z."<br>";
        $z++;
    }while($z <11);
    echo "após o loop o valor de i é $z.";
    ?>
    <hr>
</body>
</html>