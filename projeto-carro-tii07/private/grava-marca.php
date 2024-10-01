<?php
    $marca = $_POST['marca'];

    $sql = "INSERT INTO tbmarca (
        idMarca, marca
    ) VALUES (
        NULL, '$marca'
    )";
    include("../connect/conn.php");

    $exc = mysqli_query($conn,$sql);

    if( $exc){
        $resp = "Dados gravados com Sucesso!!";
    }else{
        $resp = "ERRO - ao gravar dados!";
        $resp = $resp . mysqli_error($conn);
    }
    echo $resp;
    $conn->close();
?>
<hr>
<a href="todas-marcas.php">Voltar</a>
