<?php
    include("../connect/conn.php");

    $marca = $_GET['marca'];

    $sql = "SELECT idMarca FROM tbmarca WHERE marca='$marca'";

    //$sql = "SELECT * FROM tbmarca WHERE idMarca = 40";
    //$sql = "SELECT * FROM tbmarca WHERE marca = 'AUDI'";
    //$sql = "SELECT * FROM tbmarca WHERE marca = 'AUDI' AND idMarca=2";

    $sql = "SELECT * FROM tbModelo";

    $exc = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de carro</title>
</head>
<body>
    <h1> Marcas da nossa concessionaria</h1>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>MARCA</td>
        </tr>
    <?php
    if($exc->num_rows > 0){
        while($row = $exc->fetch_assoc()){
            $idModelo = $row["idModelo"];
            $modelo = $row["modelo"];
            echo "<tr>";
            echo "<td><a href='todos-versao.php?marca=$modelo'>".$idModelo."</a></td>";
            echo "<td><a href='todos-versao.php?marca=$modelo'>".$modelo."</a></td>";
            echo "</tr>";
        }
         }else{
            echo "<tr>";
            echo "<td colspan='2'>"."Modleo não encontrado!"."</td>";
            echo "</tr>";
        }

    ?>
    </table>
    <hr>
    <form method="post" action="grava-modelo.php">
        <label>Modelo do véiculo</label>
        <input type="hidden" name="idMarca" value="<?=$idMarca?>">
        <input type="text" name="modelo" id="modelo"><br>
        <input type="submit" value="gravar">
    </form>

</body>
<?php $conn->close();?>
</body>
</html>