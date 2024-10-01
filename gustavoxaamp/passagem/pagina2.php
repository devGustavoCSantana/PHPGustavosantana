<?php
    $nome = $_POST['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pagina3.php" method="post">
        sobre nome<br>
        <input type="text" name="sobre-nome"><br>

        <input type="hidden" name="nome" value="<?=$nome?>">
        <input type="submit" value="proximo">
    </form>
    
</body>
</html>