<?php
    $nome = $_POST['nome'];
    $sobeNome = $_POST['sobre-nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="matriz.php" method="post">
        idade<br>
        <input type="text" name="idade"><br>

        <input type="hidden" name="nome" value="<?=$nome?>">
        <input type="hidden" name="sobre-nome" value="<?=$sobeNome?>">
        <input type="submit" value="proximo">
    </form>
    
</body>
</html>