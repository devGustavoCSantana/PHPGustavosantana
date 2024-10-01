<?php
    include("../connect/conn.php");
    $sql = "SELECT * FROM tbmarca";
    //$sql = "SELECT * FROM tbmarca WHERE idMarca = 40";
    //$sql = "SELECT * FROM tbmarca WHERE marca = 'AUDI'";
    //$sql = "SELECT * FROM tbmarca WHERE marca = 'AUDI' AND idMarca=1";


    // $exc = mysqli_query($conn,$sql);
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
            <td>ALTERAR</td>
            <td>EXCLUIR</td>
        </tr>
    <?php
    if($exc->num_rows > 0){
        
        while($row = $exc->fetch_assoc()){
            $idMarca = $row["idMarca"];
            $marca = $row["marca"];
            echo "<tr>";
            echo "<td><a href='todos-modelos.php?marca=$marca'>".$idMarca."</a></td>";
            echo "<td><a href='todos-modelos.php?marca=$marca'>".$marca."</a></td>";
            echo "<td><a href='frm-marca.php?idMarca=$idMarca'> ALTERAR</a></td>";
            echo "<td><a href='excluir-marca.php?idMarca=$idMarca'> EXCLUIR</a></td>";

            echo "</tr>";
        }
         }else{
            echo "<tr>";
            echo "<td colspan='4'>"."Marca não encontrada!"."</td>";
            echo "</tr>";
        }

    ?>
    </table>
    <hr>
    <form method="post" action="grava-marca.php">
        <label>Marca do véiculo</label>
        <input type="text" name="marca" id="marca"><br>
        <input type="submit" value="gravar">
    </form>
</body>
<?php $conn->close();?>
</html>