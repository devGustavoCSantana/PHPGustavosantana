<?php

$userEmail = $_POST['userEmail'];

$result=[
    'status'=>true,
    'msg'=>"Deu Bom!!!</br>$userEmail",
];



    //  Configuração do 'header' para transmitir em Json para o view
     header('Content-type: Application/json');
    //  Retorno em json para View
    echo json_encode($result);

?>